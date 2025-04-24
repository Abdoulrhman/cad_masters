<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConatctUsController;
use App\Http\Controllers\CourseCategoriesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseRegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\AuthorizationsController;
use App\Http\Controllers\Dashboard\CarouselController as DashboardCarouselController;
use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\CertificatesController;
use App\Http\Controllers\Dashboard\CompanyProfileController;
use App\Http\Controllers\Dashboard\CoursesController;
use App\Http\Controllers\Dashboard\EmployeesController;
use App\Http\Controllers\Dashboard\MediaAlbumController;
use App\Http\Controllers\Dashboard\MediasController;
use App\Http\Controllers\Dashboard\StudentsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', [HomeController::class, 'index']);

// Public Course Routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// Public Pages
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('client', [ClientController::class, 'index']);
Route::get('certificate', [CertificateController::class, 'index']);
Route::get('authorization', [AuthorizationController::class, 'index']);
Route::get('contact', [ConatctUsController::class, 'index']);
Route::get('media', [MediaController::class, 'index'])->name('media.index');
Route::get('media/albums/{album:slug}', [MediaController::class, 'show'])->name('media.albums.show');

// Authentication Routes
require __DIR__ . '/auth.php';

// Dashboard Routes (Authentication Required)
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('dashboard.analytics');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');

    // Courses Routes
    Route::resource('courses', CourseController::class)->except(['show'])->names([
        'index'   => 'dashboard.courses.index',
        'create'  => 'dashboard.courses.create',
        'store'   => 'dashboard.courses.store',
        'edit'    => 'dashboard.courses.edit',
        'update'  => 'dashboard.courses.update',
        'destroy' => 'dashboard.courses.destroy',
    ]);

    // Posts Routes (Requires Authentication)
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

    // Certificates Routes (Required Authentication)
    Route::resource('certificates', CertificatesController::class)->except(['show'])->names([
        'index'   => 'dashboard.certificates.index',
        'create'  => 'dashboard.certificates.create',
        'store'   => 'dashboard.certificates.store',
        'edit'    => 'dashboard.certificates.edit',
        'update'  => 'dashboard.certificates.update',
        'destroy' => 'dashboard.certificates.destroy',
    ]);

    // Authorization Routes (Required Authentication)
    Route::resource('authorizations', AuthorizationsController::class)->except(['show'])->names([
        'index'   => 'dashboard.authorizations.index',
        'create'  => 'dashboard.authorizations.create',
        'store'   => 'dashboard.authorizations.store',
        'edit'    => 'dashboard.authorizations.edit',
        'update'  => 'dashboard.authorizations.update',
        'destroy' => 'dashboard.authorizations.destroy',
    ]);

    // Media Routes (Required Authentication)
    Route::resource('medias', MediasController::class)->except(['show'])->names([
        'index'   => 'dashboard.medias.index',
        'create'  => 'dashboard.medias.create',
        'store'   => 'dashboard.medias.store',
        'edit'    => 'dashboard.medias.edit',
        'update'  => 'dashboard.medias.update',
        'destroy' => 'dashboard.medias.destroy',
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

    // Partner Routes (Required Authentication)
    Route::resource('branches', BranchesController::class)->except(['show'])->names([
        'index'   => 'dashboard.branches.index',
        'create'  => 'dashboard.branches.create',
        'store'   => 'dashboard.branches.store',
        'edit'    => 'dashboard.branches.edit',
        'update'  => 'dashboard.branches.update',
        'destroy' => 'dashboard.branches.destroy',
    ]);

    // Student Routes (Required Authentication)
    Route::resource('students', StudentsController::class)->names([
        'index'   => 'dashboard.students.index',
        'create'  => 'dashboard.students.create',
        'store'   => 'dashboard.students.store',
        'show'    => 'dashboard.students.show',
        'edit'    => 'dashboard.students.edit',
        'update'  => 'dashboard.students.update',
        'destroy' => 'dashboard.students.destroy',
    ]);

    // Carousel Routes
    Route::resource('carousel', DashboardCarouselController::class)->names([
        'index'   => 'dashboard.carousel.index',
        'create'  => 'dashboard.carousel.create',
        'store'   => 'dashboard.carousel.store',
        'edit'    => 'dashboard.carousel.edit',
        'update'  => 'dashboard.carousel.update',
        'destroy' => 'dashboard.carousel.destroy',
    ]);
    Route::post('carousel/update-order', [DashboardCarouselController::class, 'updateOrder'])
        ->name('dashboard.carousel.updateOrder');

    // Company Profile Routes (Required Authentication)
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

// Test Mail Route
Route::get('/test-mail', function () {
    try {
        Mail::raw('Test email from CAD Masters', function ($message) {
            $message->to('asemghazal24@gmail.com')
                ->subject('Test Email');
        });
        return 'Email sent successfully!';
    } catch (\Exception $e) {
        return 'Error sending email: ' . $e->getMessage();
    }
});

// Media Album Routes
Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        // Media Albums
        Route::get('media/albums', [MediaAlbumController::class, 'index'])->name('media.albums.index');
        Route::get('media/albums/create', [MediaAlbumController::class, 'create'])->name('media.albums.create');
        Route::post('media/albums', [MediaAlbumController::class, 'store'])->name('media.albums.store');
        Route::get('media/albums/{album}', [MediaAlbumController::class, 'show'])->name('media.albums.show');
        Route::get('media/albums/{album}/edit', [MediaAlbumController::class, 'edit'])->name('media.albums.edit');
        Route::put('media/albums/{album}', [MediaAlbumController::class, 'update'])->name('media.albums.update');
        Route::delete('media/albums/{album}', [MediaAlbumController::class, 'destroy'])->name('media.albums.destroy');

        // Media Items
        Route::post('media/albums/{album}/media', [App\Http\Controllers\Dashboard\MediaController::class, 'store'])->name('media.store');
        Route::put('media/{media}', [App\Http\Controllers\Dashboard\MediaController::class, 'update'])->name('media.update');
        Route::delete('media/{media}', [App\Http\Controllers\Dashboard\MediaController::class, 'destroy'])->name('media.destroy');
        Route::post('media/albums/{album}/reorder', [App\Http\Controllers\Dashboard\MediaController::class, 'reorder'])->name('media.reorder');

        // Legacy Media Routes (to be deprecated)
        Route::resource('medias', MediasController::class);

        // Main Resources
        Route::resource('courses', CoursesController::class);
        Route::resource('categories', CategoriesController::class);
        Route::resource('employees', EmployeesController::class);
        Route::resource('clients', ClientsController::class);
        Route::resource('partners', PartnersController::class);
        Route::resource('instructors', InstructorsController::class);
        Route::resource('students', StudentsController::class);
        Route::resource('certificates', CertificatesController::class);
        Route::resource('carousel', DashboardCarouselController::class);

        // Authorizations
        Route::resource('authorizations', AuthorizationsController::class);
    });
});
