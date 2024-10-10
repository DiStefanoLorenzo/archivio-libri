<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
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

// -- Author
Route::get(     '/author/',                [AuthorController::class,'index'    ])->name('author.home');
Route::get(     '/author/show/{author}',   [AuthorController::class,'show'     ])->name('author.show');
Route::get(     '/author/add',             [AuthorController::class,'create'   ])->name('author.create');
Route::post(    '/author/store',           [AuthorController::class,'store'    ])->name('author.store');
Route::get(     '/author/edit/{author}',   [AuthorController::class,'edit'     ])->name('author.edit');
Route::put(     '/author/update',          [AuthorController::class,'update'   ])->name('author.update');
Route::delete(  '/author/delete/{author}', [AuthorController::class,'destroy'  ])->name('author.delete');

// -- Book
Route::get(     '/',              [BookController::class,'index'  ])->name('home');
Route::get(     '/show/{book}',   [BookController::class,'show'   ])->name('book.show');
Route::get(     '/add',           [BookController::class,'create' ])->name('book.create');
Route::post(    '/store',         [BookController::class,'store'  ])->name('book.store');
Route::get(     '/edit/{book}',   [BookController::class,'edit'   ])->name('book.edit');
Route::put(     '/update',        [BookController::class,'update' ])->name('book.update');
Route::delete(  '/delete/{book}', [BookController::class,'destroy'])->name('book.delete');

// -- Category
Route::get('category/show/{category}',[CategoryController::class,'show'])->name('category.show');

Route::get(     '/category/',                [CategoryController::class,'index'    ])->name('category.home');
Route::get(     '/category/add',             [CategoryController::class,'create'   ])->name('category.create');
Route::post(    '/category/store',           [CategoryController::class,'store'    ])->name('category.store');
Route::get(     '/category/edit/{category}',   [CategoryController::class,'edit'     ])->name('category.edit');
Route::put(     '/category/update',          [CategoryController::class,'update'   ])->name('category.update');
Route::delete(  '/category/delete/{category}', [CategoryController::class,'destroy'  ])->name('category.delete');
