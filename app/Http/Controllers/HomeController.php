<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Payment;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            $data = product::paginate(3);

            $user=auth()->user();

            $count=cart::where('phone', $user->phone)->count();

            $data->map(function($product) {
                $product->formatted_price = formatRupiah($product->price);
                return $product;
            });

            return view('user.home',compact('data','count'));
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = product::paginate(3);

            return view('user.home',compact('data'));
        }
    }

    public function search(Request $request)
    {
        $search=$request->search;

        if($search=='')
        {
            $data = product::paginate(3);


        }
        $data= product::where('title','Like','%'.$search.'%')->get();

        return view('user.home',compact('data'));
    }

    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();

            $product=product::findOrFail($id);

            $cart=new cart;

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->email = $user->email;
            $cart->product_title = $product->title;
            $cart->image = $product->image;
            $cart->price = $product->price;
            $cart->save();

            return redirect()->back()->with('message','Product Added To Cart Succesfully');
        }
        else
        {
            return redirect('login');
        }
    }

    public function showcart()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {

            $user=auth()->user();

            $cart=cart::where('phone', $user->phone)->get();

            $count=cart::where('phone', $user->phone)->count();

            $totalPrice = $cart->sum(function ($item) {
                // Menghapus simbol mata uang dan format desimal dari string harga
                $cleanedPrice = (float) preg_replace('/[^\d.]/', '', $item->price);
                echo "Cleaned Price: " . $cleanedPrice . "<br>";
                return $cleanedPrice;
            });

            return view('user.showcart',compact('count','cart','totalPrice'));
        }
    }

    public function deletecart($id)
    {
        $data=cart::where('id', $id)->delete();
        return redirect()->back()->with('message','Animal Has Removed from Cart');
    }

    public function ourproduct()
    {
        // $usertype=Auth::user()->usertype;

        // if($usertype=='1')
        // {
        //     return view('admin.home');
        // }
        // else
        // {
            $data = product::all();
            
            if (Auth::check()) {
                $user = auth()->user();
                $count = Cart::where('phone', $user->phone)->count();
            } else {
                $count = 0; // Jika pengguna belum login, set jumlah produk di keranjang ke 0
            }

            $data->map(function($product) {
                $product->formatted_price = formatRupiah($product->price);
                return $product;
            });

            return view('user.ourproduct',compact('data', 'count'));
        // }
    }

    public function confirmOrderPage()
    {
        // Ambil data keranjang belanja dari user yang sedang login
        $user = auth()->user();
        $cart = Cart::where('phone', $user->phone)->get();
        $totalPrice = $cart->sum(function ($item) {
            return (float) preg_replace('/[^\d.]/', '', $item->price);
        });

        return view('user.confirm_order', compact('cart', 'totalPrice'));
    }

    public function confirmOrderSubmit(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'proof' => 'required|image|max:2048', // maksimum 2MB, sesuaikan dengan kebutuhan
        ]);

        // Simpan gambar bukti pembayaran ke dalam storage
        $image = $request->file('proof');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('payment_proofs', $imagename);
        $proofPath = 'payment_proofs/' . $imagename;

        // Ambil data keranjang belanja dari user yang sedang login
        $user = auth()->user();
        $cart = Cart::where('phone', $user->phone)->get();

        // Hitung total harga
        $totalPrice = $cart->sum('price');

        // Gabungkan nama produk menjadi satu string
        $productNames = $cart->pluck('product_title')->implode(', ');

        // Simpan data konfirmasi order ke dalam tabel payments
        $payment = new Payment();
        $payment->name = $request->name;
        $payment->phone = $request->phone;
        $payment->address = $request->address;
        $payment->product_name = $productNames; // Nama produk dikelompokkan
        $payment->price = $totalPrice;
        $payment->status = 'Pending'; // status pembayaran awal
        $payment->image = $proofPath; // path gambar bukti pembayaran
        $payment->save();

        // Hapus semua data dalam keranjang belanja untuk user yang sedang login
        Cart::where('phone', $user->phone)->delete();


        // Redirect kembali dengan pesan sukses
        return redirect('/')->with('message', 'Order Confirmed Successfully');
    }
}
