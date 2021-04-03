<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
})->middleware('xt');

Route::get('/hello-world', function () {
    echo 'Hello World';
})->middleware('auth');
Route::get('/hello/it17', function () {
    echo 'Xin chào các bạn lớp IT 17';
});
Route::get('/hello/{ten?}', function ($ten = 'IT 17') {
    echo 'Xin chào các bạn: ' . $ten;
});

Route::get('tinh-toan/{a}', function ($a = 0) {
    echo 'kết quả của: 5+' . $a . '=' . (5 + $a);
})->where(['a' => '^[0-9]*$']);


Route::get('dinh-danh', [
    'as' => 'dd',
    function () {
        echo 'Đây là route có định danh';
    }]);
Route::get('ten-route',function (){
    echo 'Đây là cách đặt định danh 2';
})->name('dd2');
//Quản lý sản phẩm

Route::get('danh-sach',function (){
    echo  'List';
})->name('danhsachsp');


Route::get('login', [UserController::class, 'Login']);
Route::get('dang-nhap', [UserController::class, 'Login']);
Route::get('logout', [UserController::class, 'Logout']);

Route::get('tinh-tong/{a}/{b}', [UserController::class, 'Tong']);

Route::get('get-users', [UserController::class, 'GetUser']);

Route::get('them-san-pham', [ProductController::class,'Add']);

Route::group(['prefix'=>'product', 'middleware'=>['auth']], function (){
    Route::get('add', [ProductController::class,'Add']);
    Route::get('edit', [ProductController::class,'edit']);
});

Route::get('list-category', [CategoryController::class, 'Index']);
Route::get('add-category', [CategoryController::class, 'AddCategory'])->name('them-category');
Route::post('add-category', [CategoryController::class, 'SaveCategory'])->name('them-category');
Route::get('update-category/{id}', [CategoryController::class, 'UpdateCategory'])->name('sua-category');
Route::post('update-category', [CategoryController::class, 'SaveUpdate'])->name('sua-category');
Route::get('delete-category', [CategoryController::class, 'DeleteCategory']);

//Route for contact
Route::get('contacts', [\App\Http\Controllers\ContactController::class, 'Index']);
Route::get('contact/add', [\App\Http\Controllers\ContactController::class, 'Add']);
Route::get('contact/update', [\App\Http\Controllers\ContactController::class, 'Update']);
Route::get('contact/delete', [\App\Http\Controllers\ContactController::class, 'Delete']);
Route::get('xem-phim', function (){
    echo 'Đã vào cổng';
})->middleware('checkAge');
Route::get('kiem-tra',['middleware'=>'checkChildern', function(){
    echo  'Đã kiểm tra';
}]);

Route::get('add-post', [\App\Http\Controllers\PostController::class,'Add']);
Route::post('save-post', [\App\Http\Controllers\PostController::class,'Save'])->middleware('checkCategory');
Route::get('dang-nhap',[\App\Http\Controllers\LoginController::class,'FormDN'])->name('login');
Route::post('thuc-hien-dang-nhap',[\App\Http\Controllers\LoginController::class,'DangNhap']);
