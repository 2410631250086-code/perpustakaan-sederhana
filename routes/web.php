<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BorrowingController;

Route::get('/', function () {
    return view('welcome');
});

// Catatan: Pembungkus middleware auth dinonaktifkan sementara untuk testing tanpa login
// Route::middleware(['auth'])->group(function () { 

    Route::resource('categories', CategoryController::class);
    Route::resource('books', BookController::class);
    Route::resource('members', MemberController::class);
    Route::resource('borrowings', BorrowingController::class)->except(['edit', 'update']);
    Route::put('/borrowings/{id}/return', [BorrowingController::class, 'returnBook'])->name('borrowings.return');

// });