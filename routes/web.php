<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/singlepage', [HomeController::class, 'singlepage'])->name('singlepage');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/contents/{id}/{type}', [HomeController::class, 'contents'])->name('contents');
Route::get('/menucontents/{id}/{type}', [HomeController::class, 'menucontents'])->name('menucontents');
Route::get('/menus', [HomeController::class, 'menus'])->name('menus');
Route::get('/userlogin', [HomeController::class, 'userlogin'])->name('userlogin');
Route::get('/register', [HomeController::class, 'register'])->name('register');


//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

// Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    # Menu
    Route::get('menu', [\App\Http\Controllers\Admin\MenuController::class, 'index'])->name('admin_menu');
    Route::get('menu/add', [\App\Http\Controllers\Admin\MenuController::class, 'add'])->name('admin_menu_add');
    Route::post('menu/create', [\App\Http\Controllers\Admin\MenuController::class, 'create'])->name('admin_menu_create');
    Route::get('menu/edit/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'edit'])->name('admin_menu_edit');
    Route::post('menu/update/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'update'])->name('admin_menu_update');
    Route::get('menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [\App\Http\Controllers\Admin\MenuController::class, 'show'])->name('admin_menu_show');

    #Contents
    Route::prefix('contents')->group(function (){
        //Route assigned name "admin.users"...
        Route::get('/', [\App\Http\Controllers\Admin\ContentsController::class, 'index'])->name('admin_contents');
        Route::get('create', [\App\Http\Controllers\Admin\ContentsController::class, 'create'])->name('admin_contents_add');
        Route::post('store', [\App\Http\Controllers\Admin\ContentsController::class, 'store'])->name('admin_contents_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ContentsController::class, 'edit'])->name('admin_contents_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ContentsController::class, 'update'])->name('admin_contents_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContentsController::class, 'destroy'])->name('admin_contents_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ContentsController::class, 'show'])->name('admin_contents_show');
    });

    #Message
    Route::prefix('message')->group(function (){
        //Route assigned name "admin.users"...
        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
    });

    #Product Image Gallery
    Route::prefix('image')->group(function (){
        Route::get('create/{contents_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{contents_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{contents_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });
    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get('user/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');

});


Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
