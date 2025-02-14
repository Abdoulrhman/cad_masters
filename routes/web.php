<?php

use App\Http\Controllers\CourseCategoriesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route (Requires Authentication)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authentication Routes
require __DIR__ . '/auth.php';

// Profile Routes (Requires Authentication)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Posts Routes (Requires Authentication)
Route::resource('posts', PostController::class)->middleware('auth');

// Courses Routes
Route::prefix('courses')->group(function () {
    Route::get('/index', function () {
        return view('courses/index');
    });
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/index', function () {
        return view('admin.index');
    });

    Route::get('/home', function () {
        return view('admin.home');
    });

    // Admin - Courses Routes
    Route::prefix('courses')->group(function () {
        Route::get('/index', [CourseController::class, 'index'])->name('admin.courses.index');
        Route::get('/create', [CourseController::class, 'create'])->name('admin.courses.create');
        Route::post('/store', [CourseController::class, 'store'])->name('admin.courses.store');
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('admin.courses.edit');
        Route::put('/update/{id}', [CourseController::class, 'update'])->name('admin.courses.update');
        Route::delete('/{id}/destroy', [CourseController::class, 'destroy'])->name('admin.courses.destroy');
    });

    // Admin - Categories Routes
    Route::prefix('categories')->group(function () {
        Route::get('/index', [CourseCategoriesController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [CourseCategoriesController::class, 'create'])->name('admin.categories.create');
        Route::post('/store', [CourseCategoriesController::class, 'store'])->name('admin.categories.store');
        Route::get('/edit/{id}', [CourseCategoriesController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/update/{id}', [CourseCategoriesController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{id}/destroy', [CourseCategoriesController::class, 'destroy'])->name('admin.categories.destroy');
    });
});
