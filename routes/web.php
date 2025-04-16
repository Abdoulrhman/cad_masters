<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseCategoriesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseRegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\CompanyProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// Public Course Routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// Authentication Routes
require __DIR__ . '/auth.php';

// Dashboard Routes (No Authentication Required)
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('dashboard.analytics');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
    // Courses Routes (Requires Authentication)
    Route::resource('courses', CourseController::class)->except(['show'])->names([
        'index'   => 'dashboard.courses.index',
        'create'  => 'dashboard.courses.create',
        'store'   => 'dashboard.courses.store',
        'edit'    => 'dashboard.courses.edit',
        'update'  => 'dashboard.courses.update',
        'destroy' => 'dashboard.courses.destroy',
    ]);

    // Courses Routes (Requires Authentication)
    Route::resource('posts', PostController::class)->except(['show'])->names([
        'index' => 'dashboard.posts.index',
    ]);

// Categories Routes (Requires Authentication)
    Route::resource('categories', CourseCategoriesController::class)->except(['show'])->names([
        'index'   => 'dashboard.categories.index',
        'create'  => 'dashboard.categories.create',
        'store'   => 'dashboard.categories.store',
        'edit'    => 'dashboard.categories.edit',
        'update'  => 'dashboard.categories.update',
        'destroy' => 'dashboard.categories.destroy',
    ]);

    // Employees Routes (Required Authentication)
    Route::resource('employees', EmployeeController::class)->except(['show'])->names([
        'index'       => 'dashboard.employees.index',
        'create'      => 'dashboard.employees.create',
        'store'       => 'dashboard.employees.store',
        'edit'        => 'dashboard.employees.edit',
        'update'      => 'dashboard.employees.update',
        'destroy'     => 'dashboard.employees.destroy',
        'downloadPdf' => 'dashboard.employees.downloadPdf',
    ]);

    // Clients Routes (Required Authentication)
    Route::resource('clients', ClientsController::class)->except(['show'])->names([
        'index'   => 'dashboard.clients.index',
        'create'  => 'dashboard.clients.create',
        'store'   => 'dashboard.clients.store',
        'edit'    => 'dashboard.clients.edit',
        'update'  => 'dashboard.clients.update',
        'destroy' => 'dashboard.clients.destroy',
    ]);

    // Instructors Routes (Required Authentication)
    Route::resource('instructors', InstructorsController::class)->except(['show'])->names([
        'index'   => 'dashboard.instructors.index',
        'create'  => 'dashboard.instructors.create',
        'store'   => 'dashboard.instructors.store',
        'edit'    => 'dashboard.instructors.edit',
        'update'  => 'dashboard.instructors.update',
        'destroy' => 'dashboard.instructors.destroy',
    ]);

    // Partner Routes (Required Authentication)
    Route::resource('partners', PartnersController::class)->except(['show'])->names([
        'index'   => 'dashboard.partners.index',
        'create'  => 'dashboard.partners.create',
        'store'   => 'dashboard.partners.store',
        'edit'    => 'dashboard.partners.edit',
        'update'  => 'dashboard.partners.update',
        'destroy' => 'dashboard.partners.destroy',
    ]);

    Route::resource('students', StudentController::class)->names([
        'index'   => 'dashboard.students.index',
        'create'  => 'dashboard.students.create',
        'store'   => 'dashboard.students.store',
        'show'    => 'dashboard.students.show',
        'edit'    => 'dashboard.students.edit',
        'update'  => 'dashboard.students.update',
        'destroy' => 'dashboard.students.destroy',
    ]);
    Route::resource('carousel', CarouselController::class)->names([
        'index'   => 'dashboard.carousel.index',
        'create'  => 'dashboard.carousel.create',
        'store'   => 'dashboard.carousel.store',
        'edit'    => 'dashboard.carousel.edit',
        'update'  => 'dashboard.carousel.update',
        'destroy' => 'dashboard.carousel.destroy',
    ]);

    Route::get('/company-profile', [CompanyProfileController::class, 'index'])
        ->name('dashboard.company-profile.index');
    Route::post('/company-profile', [CompanyProfileController::class, 'store'])
        ->name('dashboard.company-profile.store');
    Route::put('/company-profile/{companyProfile}', [CompanyProfileController::class, 'update'])
        ->name('dashboard.company-profile.update');

    // Job Applications Routes
    Route::get('/job-applications', [CareerController::class, 'dashboard'])->name('dashboard.job-applications.index');
    Route::get('/job-applications/{application}', [CareerController::class, 'show'])->name('dashboard.job-applications.show');
    Route::put('/job-applications/{application}/status', [CareerController::class, 'updateStatus'])->name('dashboard.job-applications.update-status');

    // Position Routes
    Route::resource('positions', PositionController::class)->names([
        'index'   => 'dashboard.positions.index',
        'create'  => 'dashboard.positions.create',
        'store'   => 'dashboard.positions.store',
        'edit'    => 'dashboard.positions.edit',
        'update'  => 'dashboard.positions.update',
        'destroy' => 'dashboard.positions.destroy',
    ]);
});

// Profile Routes (Requires Authentication)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Debug Route (Check Authentication Status)
Route::get('/debug-auth', function () {
    return response()->json(auth()->user());
});

// About Page Route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Careers routes
Route::get('/careers', [CareerController::class, 'index'])->name('careers.index');
Route::post('/careers/apply', [CareerController::class, 'apply'])->name('careers.apply');

// Contact routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/contact', [ContactController::class, 'index'])->name('dashboard.contact');
    Route::put('/dashboard/contact/settings', [ContactController::class, 'updateSettings'])->name('contact.settings.update');
});

// Course Registration Routes
Route::get('/courses/{course}/register', [CourseRegistrationController::class, 'showForm'])->name('courses.register');
Route::post('/courses/{course}/register', [CourseRegistrationController::class, 'submit'])->name('courses.register.submit');
