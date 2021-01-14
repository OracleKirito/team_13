<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\PurchaseRecordController;
use App\Http\Controllers\ProductNameController;
use App\Http\Controllers\CompanyController;
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


//member
Route::get('member', [MemberController::class, 'index'])->name('member');

Route::get('member/{id}', [MemberController::class, 'show'])->where('id','[0-9]+')->name('member_show');

Route::get('member/create', [MemberController::class, 'create'])->name('member_create');

Route::get('member/edit/{id}', [MemberController::class, 'edit'])->where('id','[0-9]+')->name('member_edit');

Route::post('member/store', [MemberController::class, 'store'])->name('member_store');

Route::patch('member/update/{id}', [MemberController::class, 'update'])->where('id', '[0-9]+')->name('member_update');

Route::delete('member/delete/{id}', [MemberController::class, 'destroy'])->where('id', '[0-9]+')->name('member_destroy');

Route::post('member/record/{id}', [MemberController::class, 'record'])->where('id', '[0-9]+')->name('member_record');


//purchase
Route::get('purchase/', [PurchaseRecordController::class, 'index'])->name('purchase');

Route::get('purchase/{id}', [PurchaseRecordController::class, 'show'])->where('id','[0-9]+')->name('purchase_show');

Route::get('purchase/create', [PurchaseRecordController::class, 'create'])->name('purchase_create');

Route::post('purchase/store', [PurchaseRecordController::class, 'store'])->name('purchase_store');

Route::patch('purchase/update/{id}', [PurchaseRecordController::class, 'update'])->where('id', '[0-9]+')->name('purchase_update');

Route::get('purchase/edit/{id}', [PurchaseRecordController::class, 'edit'])->where('id','[0-9]+')->name('purchase_edit');

Route::post('purchase/arc', [PurchaseRecordController::class, 'arc'])->where('id', '[0-9]+')->name('purchase_arc');

Route::delete('purchase/delete/{id}', [PurchaseRecordController::class, 'destroy'])->where('id', '[0-9]+')->name('purchase_destroy');



//product
Route::get('product', [ProductNameController::class, 'index'])->name('product');

Route::get('product/{id}', [ProductNameController::class, 'show'])->where('id','[0-9]+')->name('product_show');

Route::get('product/create', [ProductNameController::class, 'create'])->name('product_create');

Route::get('product/edit/{id}', [ProductNameController::class, 'edit'])->where('id','[0-9]+')->name('product_edit');

Route::post('product/store', [ProductNameController::class, 'store'])->name('member_store');

Route::patch('product/update/{id}', [ProductNameController::class, 'update'])->where('id', '[0-9]+')->name('product_update');

Route::delete('product/delete/{id}', [ProductNameController::class, 'destroy'])->where('id', '[0-9]+')->name('product_destroy');

Route::post('product/arc', [ProductNameController::class, 'arc'])->where('id', '[0-9]+')->name('product_arc');


//company
Route::get('company', [CompanyController::class, 'index'])->name('company');

Route::get('company/{id}', [CompanyController::class, 'show'])->where('id','[0-9]+')->name('company_show');

Route::get('company/create', [CompanyController::class, 'create'])->name('company_create');

Route::get('company/edit/{id}', [CompanyController::class, 'edit'])->where('id','[0-9]+')->name('company_edit');

Route::post('company/store', [CompanyController::class, 'store'])->name('company_store');

Route::patch('company/update/{id}', [CompanyController::class, 'update'])->where('id', '[0-9]+')->name('company_update');

Route::delete('company/delete/{id}', [CompanyController::class, 'destroy'])->where('id', '[0-9]+')->name('company_destroy');

Route::post('company/product/{id}', [CompanyController::class, 'product'])->where('id', '[0-9]+')->name('company_product');



Route::get('ts',function(){return view('members.test');});
