<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',[Productcontroller::class,'index']);
// Route::get('/products/{name}',[Productcontroller::class,'show']);
//Route::get('/products/{name}',[Productcontroller::class,'show'])->where('name','[a-zA-Z]+');
Route::get('/products/{name}/{id}',[Productcontroller::class,'show'])->where(
    [
        'name' => '[a-zA-Z]+',
        'id' => '[0-9]+'
    ]);
// Route::get('/users', function () {
//     return response()->json([
//         'name' => 'salman',
//         'rollNum' => '123EP'
//     ]);
// });
// Route::get('/user', function () {
//     return redirect('/');
// });
