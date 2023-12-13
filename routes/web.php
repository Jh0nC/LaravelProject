<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// index
Route::view('/', 'index')->name('index');

/* product */

// Create
Route::get('/product/register',[ProductController::class,'create'])->name('add.product');
Route::post('/product/register',[ProductController::class,'store'])->name('add.product.save');
// Read
Route::get('/product',[ProductController::class,'index'])->name('list.product');
// Update
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('edit.product');
Route::post('/product/edit/{id}',[ProductController::class,'update'])->name('edit.product.save');
// Delete
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('delete.product');
Route::post('/product/delete/{id}',[ProductController::class,'destroy'])->name('delete.product.destroy');

/* client */