<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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


/* user */
// Create
Route::get('/user/register',[UserController::class,'create'])->name('add.user');
Route::post('/user/register',[UserController::class,'store'])->name('add.user.save');
// Read
Route::get('/user',[UserController::class,'index'])->name('list.user');
// Update
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('edit.user');
Route::post('/user/edit/{id}',[UserController::class,'update'])->name('edit.user.save');
// Delete
Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('delete.user');
Route::post('/user/delete/{id}',[UserController::class,'destroy'])->name('delete.user.destroy');


/* client */
// Create
Route::get('/client/register',[ClientController::class,'create'])->name('add.client');
Route::post('/client/register',[ClientController::class,'store'])->name('add.client.save');
// Read
Route::get('/client',[ClientController::class,'index'])->name('list.client');
// Update
Route::get('/client/edit/{id}',[ClientController::class,'edit'])->name('edit.client');
Route::post('/client/edit/{id}',[ClientController::class,'update'])->name('edit.client.save');
// Delete
Route::get('/client/delete/{id}',[ClientController::class,'delete'])->name('delete.client');
Route::post('/client/delete/{id}',[ClientController::class,'destroy'])->name('delete.client.destroy');


/* categorie */
// Create
Route::get('/categorie/register',[CategorieController::class,'create'])->name('add.categorie');
Route::post('/categorie/register',[CategorieController::class,'store'])->name('add.categorie.save');
// Read
Route::get('/categorie',[CategorieController::class,'index'])->name('list.categorie');
// Update
Route::get('/categorie/edit/{id}',[CategorieController::class,'edit'])->name('edit.categorie');
Route::post('/categorie/edit/{id}',[CategorieController::class,'update'])->name('edit.categorie.save');
// Delete
Route::get('/categorie/delete/{id}',[CategorieController::class,'delete'])->name('delete.categorie');
Route::post('/categorie/delete/{id}',[CategorieController::class,'destroy'])->name('delete.categorie.destroy');
