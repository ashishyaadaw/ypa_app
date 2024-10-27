<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\ContactsController;
use App\Http\Controllers\Api\ControlController;
use App\Http\Controllers\Api\FormController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\InternshipController;
use App\Http\Controllers\Api\MentorController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\NoticeController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\SlidesController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\WorkController;
use App\Http\Controllers\Api\VolunteerController;
use App\Http\Controllers\Api\StreetPlayController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('testimonials', controller: TestimonialController::class);
Route::apiResource('users', controller: UserController::class);
Route::apiResource('mentors', controller: MentorController::class);
Route::apiResource('partners', controller: PartnerController::class);
Route::apiResource('works', controller: WorkController::class);
Route::apiResource('volunteers', controller: VolunteerController::class);
Route::apiResource('internships', controller: InternshipController::class);
Route::apiResource('forms', controller: FormController::class);
Route::apiResource('contacts', controller: ContactsController::class);
Route::apiResource('gallery', controller: GalleryController::class);
Route::apiResource('blogs', controller: BlogController::class);
Route::apiResource('controls', controller: ControlController::class);

Route::delete('/gallery', action: [GalleryController::class, 'deleteMultiple']);
Route::delete('/contacts', action: [StreetPlayController::class, 'deleteMultiple']);

Route::apiResource('street-play-artists', controller: StreetPlayController::class);

Route::post('/upload-photo', [PhotoController::class, 'upload']);



Route::apiResource('products', ProductController::class);
Route::apiResource('notices', NoticeController::class);
Route::apiResource('slides', controller: SlidesController::class);
Route::delete('/slides', [SlidesController::class, 'deleteMultiple']);
Route::delete('/notices', [NoticeController::class, 'deleteMultiple']);
Route::delete('/partners', [PartnerController::class, 'deleteMultiple']);
Route::delete('/volunteers', [VolunteerController::class, 'deleteMultiple']);
Route::delete('/internships', [InternshipController::class, 'deleteMultiple']);
Route::delete('/testimonials', action: [TestimonialController::class, 'deleteMultiple']);
Route::delete('/mentors', action: [MentorController::class, 'deleteMultiple']);
Route::delete('/street-play-artists', action: [StreetPlayController::class, 'deleteMultiple']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
