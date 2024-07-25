<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Payment;
class AdminController extends Controller
{
    public function product()

    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)

    {
        $data=new product;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product Added Succesfully');
    }

    public function showproduct()
    {
        $data = product::all()->map(function($product) {
            $product->formatted_price = formatRupiah($product->price);
            return $product;
        });
        return view('admin.showproduct',compact('data'));
    }

    public function deleteproduct($id)
    {
        // $data=product::find($id);
        $data=product::where('id', $id)->delete();
        return redirect()->back()->with('message','Product Has Deleted');
    }

    public function updateview($id)
    {
        $data=product::find($id);
        return view('admin.updateview',compact('data'));
    }

    public function updateproduct(Request $request, $id)
    {
        $data=product::find($id);

        $image=$request->file;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('productimage',$imagename);

            $data->image=$imagename;
        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product Updated Succesfully');
    }

    public function showorder()
    {
        $payment=payment::all();

        return view('admin.showorder', compact('payment'));
    }

    public function deleteorder($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $payment->delete();

        return redirect()->back()->with('message', 'Order deleted successfully.');
    }

    public function updateStatus(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'status' => 'required|in:Disetujui,Ditolak', // Pastikan status hanya bisa disetujui atau ditolak
        ]);

        // Temukan pembayaran berdasarkan ID
        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->back()->with('error', 'Pembayaran tidak ditemukan.');
        }

        // Update status pembayaran
        $payment->status = $request->status;
        $payment->save();

        return redirect()->back()->with('message', 'Status pembayaran berhasil diperbarui.');
    }

    public function showuser()
    {
        $users = User::all();
        return view('admin.showuser',compact('users'));
    }
}