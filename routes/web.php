<?php

use App\Http\Controllers\AddElements;
use App\Http\Controllers\BazaController;
use App\Http\Controllers\CreateImagesController;
use App\Http\Controllers\Createnewpage;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\RegiController;
use App\Http\Controllers\FacebookController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return 'hello world';
});

Route::get('/page', function () {
    return view('page');
});

Route::get('/page2', [PageController::class, 'index'])->name('index');

Route::get('/lesson1', [LessonController::class, 'lesson1'])->name('lesson1');
Route::get('/lesson2', [LessonController::class, 'lesson2'])->name('lesson2');

Route::get('/baza', [BazaController::class, 'baza'])->name('baza');

Route::get('/addElements', [AddElements::class, 'elements'])->name('addElements') ;

Route::get('/form' , [TableController::class , 'form'])->name('form') ;
Route::post('/create' , [TableController::class , 'create'])->name('create') ;
Route::get('/formUpdate/{id}' , [TableController::class , 'update'])->name('update') ;
Route::post('/formstore' , [TableController::class , 'store'])->name('store') ;
Route::post('/delete' , [TableController::class , 'delete'])->name('delete') ;


Route::get('/create_images' , [CreateImagesController::class , 'create_images'])->name('create_images') ;
Route::post('/create_img' , [CreateImagesController::class , 'create_img'])->name('create_img') ;
Route::get('/store_img/{id}' ,[CreateImagesController::class , 'store_img'])->name('store_img');
Route::post('/update_img' ,[CreateImagesController::class , 'update_img'])->name('update_img');



Route::get('/join',[JoinController::class,'join'])->name('join');

Route::get('/add',[ProductController::class,'addd'])->name('addd');
Route::post('/addproduct' ,[ProductController::class , 'addproduct'])->name('addproduct');

Route::get('/product',[ProductController::class,'product'])->name('prodact');
Route::post('/product' ,[ProductController::class , 'products'])->name('product');


Route::get('/drop',[ProductController::class,'drop'])->name('drop');



Route::get('/table1',[TabController::class,'table1'])->name('table1');
Route::post('/tab1' ,[TabController::class , 'tab1'])->name('tab1');

Route::get('/table2',[TabController::class,'table2'])->name('table2');
Route::post('/tab2' ,[TabController::class , 'tab2'])->name('tab2');

Route::get('/select',[TabController::class,'select'])->name('select');

Route::get('locale/{locale}',function ($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});


Route::get('/lang',[LangController::class,'lang'])->name('lang');


Route::get('/register',[RegiController::class,'register'])->name('resgister');
Route::post('/regi' ,[RegiController::class , 'regi'])->name('regi');


Route::get('/login',[RegiController::class,'login'])->name('login');
Route::post('/log' ,[RegiController::class , 'log'])->name('log');

Route::get('auth/facebook',[FacebookController::class,'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/facebookcallback',[FacebookController::class,'facebookCallback']);
