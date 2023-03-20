<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckLogin;
use Dompdf\Dompdf;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login/auth', [LoginController::class, 'doLogin']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/',[\App\Http\Controllers\myController::class,'main'])->name('main');
Route::get('/corkie',[\App\Http\Controllers\myController::class,'corkie']);
Route::get('/test',[\App\Http\Controllers\myController::class,'lessionview']);
Route::get('/khoahoc/{id}',[\App\Http\Controllers\myController::class,'detail'])->name('kh');
Route::get('contact',[\App\Http\Controllers\myController::class,'contact'])->name('contact');
Route::post('postcontact',[\App\Http\Controllers\myController::class,'postcontact'])->name('postcontact');

Route::get('lessionsshow/{id}/{key}',[\App\Http\Controllers\myController::class,'lessionsshow'])->name('lsshow');
Route::get('lessionsshow/{id}',[\App\Http\Controllers\myController::class,'lessionsshow'])->name('lsshow_search');
Route::get('/tai-file-pdf',[\App\Http\Controllers\myController::class,'printpdf'])->name('printpdf');
// Route::get('/xuat-file-pdf',[\App\Http\Controllers\myController::class,'xuatpdf'])->name('xuatfilepdf');
Route::get('search',[myController::class,'search'])->name('search');


Route::middleware([CheckLogin::class])->group(function(){
    Route::get('/admin',[AdminController::class,'admin'])->name('admin')->name('adpage');
    Route::get('/admin/adpage',[AdminController::class,'adpage'])->name('adpage');
    Route::get('/admin/courses',[AdminController::class,'admin_courses'])->name('admin_courses');
    Route::post('/admin/courses/add',[AdminController::class,'add_courses']);
    Route::post('/admin/courses/edit',[AdminController::class,'edit_courses']);
    Route::get('/admin/courses/delete/{id}',[AdminController::class,'delete_courses']);

    Route::get('/admin/subjects',[AdminController::class,'admin_subjects'])->name('admin_subjects');
    Route::post('/admin/subjects/add',[AdminController::class,'add_subjects']);
    Route::post('/admin/subjects/edit',[AdminController::class,'edit_subjects']);
    Route::get('/admin/subjects/delete/{id}',[AdminController::class,'delete_subject']);

    Route::get('/admin/lessions',[AdminController::class,'admin_lessions']);
    Route::post('/admin/lessions/add',[AdminController::class,'add_lessions']);
    Route::post('/admin/lessions/edit',[AdminController::class,'edit_lessions']);
    Route::get('/admin/lessions/delete/{id}',[AdminController::class,'delete_lessions']);
});




