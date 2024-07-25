<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);
// });

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About"
//     ]);
// });

// Route::get('/blog', function () {
//     return view('blog', [
//         "title" => "Blog"
//     ]);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);
//Admin Route
route::get('/product',[AdminController::class,'product']);
route::post('/uploadproduct',[AdminController::class,'uploadproduct']);
route::get('/showproduct',[AdminController::class,'showproduct']);
route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
route::get('/updateview/{id}',[AdminController::class,'updateview']);
route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);
route::get('/showorder',[AdminController::class,'showorder']);
Route::delete('/deleteorder/{id}', [AdminController::class, 'deleteorder']);
Route::put('/updateorder/{id}', [AdminController::class, 'updateStatus'])->name('orders.updateStatus');
route::get('/showuser',[AdminController::class,'showuser']);
//User Route
route::get('/ourproduct',[HomeController::class,'ourproduct']);
route::get('/search',[HomeController::class,'search']);
route::post('/addcart/{id}',[HomeController::class,'addcart']);
route::get('/showcart',[HomeController::class,'showcart']);
route::get('/deletecart/{id}',[HomeController::class,'deletecart']);
//Payment
Route::get('/confirm_order', [HomeController::class, 'confirmOrderPage']);
Route::post('/confirm_order_submit', [HomeController::class, 'confirmOrderSubmit']);