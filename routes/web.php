<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// AUTH ROUTES PROTECTED
Route::middleware(['auth'])->group(function () {

    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('/dashboard/{input}', [DashboardController::class, 'showDashboardMenus']);
    Route::get('/forms', [DashboardController::class, 'showForms']);
    Route::get('/volunteers', [DashboardController::class, 'showVolunteers']);
    Route::get('/members', [DashboardController::class, 'showMembers']);
    Route::get('/internships', [DashboardController::class, 'showInternships']);
    Route::get('/streetplay', [DashboardController::class, 'showStreetPlay']);
    Route::get('/campusambassador', [DashboardController::class, 'showCampusAmbassador']);
    Route::get('/researcher', [DashboardController::class, 'showResearcher']);
    Route::get('/district_coordinators', [DashboardController::class, 'showDistrictCoordinators']);
    Route::get('/csr_partners', [DashboardController::class, 'showCsrPartners']);
    Route::get('/requested_contacts', [DashboardController::class, 'showContacts']);
    // forms routes
    Route::get('/notices', [DashboardController::class, 'showNotices']);
    Route::get('/controls', [DashboardController::class, 'showControls']);
    Route::get('/blogs', [DashboardController::class, 'showBlogs']);
    // notices routes
    Route::get('/slides', [DashboardController::class, 'showSlides']);
    // slides routes

    Route::get('/testimonials', [DashboardController::class, 'showTestimonials']);
    Route::get('/mentors', [DashboardController::class, 'showMentors']);
    // testimonials routes

    Route::get('/partners', action: [DashboardController::class, 'showPartners']);
    // partners routes

    Route::get('/tables', action: [DashboardController::class, 'showTables']);
    // tables routes

    Route::get('/pages', [DashboardController::class, 'showPages']);


});



// // Route::get('/dashboard', function () {
// //     return view('dashboard');
// // })->middleware('auth')->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->middleware('auth')->name('dashboard');
// // Dashboard routes
// Route::get('/dashboard/{input}', [DashboardController::class, 'showDashboard'])->middleware('auth');





Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about/{input}', [PageController::class, 'showAbout']);
Route::get('/what-we-do/{input}', [PageController::class, 'showWork']);
Route::get('/project/{input}', [PageController::class, 'showProject']);
Route::get('/media-corner/{input}', [PageController::class, 'showMediacorner']);
Route::get('/media-corner/{input}', [PageController::class, 'showMediacorner']);
Route::get('/blog-&-articles/{id}', [PageController::class, 'showBlogAndMedia']);
Route::get('/activities/{input}', [PageController::class, 'showActivity']);
Route::get('/gallery/{input}', [PageController::class, 'showGallery']);
Route::get('/join-us/{input}', [PageController::class, 'showJoinus']);
Route::get('/donate', [PageController::class, 'showDonation']);
