<?php

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomePageEtcController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// frontend all routes here;
Route::get('/chart-data', [ChartController::class, 'onAllSelect']);
Route::get('/client-reviews', [ClientReviewController::class, 'allReviews']);
Route::post('/contact-form', [ContactController::class, 'storeContactFormData']);
Route::get('/courese-home', [CourseController::class, 'homeCourses']);
Route::get('/courese-all', [CourseController::class, 'allCourses']);
Route::post('/course-details', [CourseController::class, 'courseDetails']);
Route::get('/footer-data', [FooterController::class, 'getFooterData']);
Route::get('/information', [InformationController::class, 'getInformationData']);
Route::get('/services', [ServiceController::class, 'getServicesData']);
Route::get('/project-home', [ProjectController::class, 'homeProjects']);
Route::get('/project-all', [ProjectController::class, 'allProjects']);
Route::post('/project-details', [ProjectController::class, 'projectDetails']);
Route::get('/home-video', [HomePageEtcController::class, 'homeVideo']);
Route::get('/total-home', [HomePageEtcController::class, 'homeTotal']);
Route::get('/home-tech', [HomePageEtcController::class, 'homeTech']);
Route::get('/home-title', [HomePageEtcController::class, 'homeTitle']);
