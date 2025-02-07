<?php

//namespace App\Http\Controllers\CourseController;


use App\Http\Controllers;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseCategoriesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';

//Route::get('courses/index', 'CourseController@index');
Route::get('courses/index', function () {
    return view('courses/index');});





// Asem Routes


Route::get('admin/index', function () {
    return view('admin.index');});

Route::get('admin/home', function () {
    return view('admin.home');});


//Route::resource('/courses', 'CourseController@index');
Route::get('admin/courses/index', [courseController::class,'index'])->name('admin.courses.index');
Route::get('admin/courses/create', [courseController::class,'create'])->name('admin.courses.create');
Route::post('/admin/courses/store', [courseController::class,'store'])->name('admin.courses.store');
Route::get('admin/courses/edit/{id}', [courseController::class,'edit'])->name('admin.courses.edit');
Route::put('admin/courses/update/{id}', [courseController::class,'update'])->name('admin.courses.update');
Route::delete('admin/courses/{id}/destroy', [courseController::class,'destroy'])->name('admin.courses.destroy');

Route::get('admin/categories/index', [courseCategoriesController::class,'index'])->name('admin.categories.index');
Route::post('admin/categories/create', [courseCategoriesController::class,'create'])->name('admin.categories.create');
Route::post('admin/categories/store', [courseCategoriesController::class,'store'])->name('admin.categories.store');
Route::get('admin/categories/{id}/edit', [courseCategoriesController::class,'edit'])->name('admin.categories.edit');
Route::delete('admin/categories/{id}/destroy', [courseCategoriesController::class,'destroy'])->name('admin.categories.destroy');

//Route::get('/courses', 'App\Http\Controllers\CourseController@index');
//Route::resource('/courses', 'App\Http\Controllers\CourseController@create');
//Route::resource('/courses', 'CourseController@create');
//Route::get('courses', [CourseController::class, 'index']);
//Route::get('/courses/create', [CourseController::class, 'create']);
//Route::resource('/courses', 'CourseController@create');
//Route::get('/courses/create', 'CoursesController@index')->name('courses.index');
//Route::get('courses/create', 'CourseController@create')->name('courses.create');