<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['as' => 'frontend.'], function () {

    Route::get('/', [User\HomeController::class, 'index'])->name('home');
    Route::get('/blogs', [User\HomeController::class, 'blogs'])->name('blogs');
    Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
    Route::get('/top-signs-you-need-brick-facade-repair-in-nyc-before-it-gets-worse', [User\HomeController::class, 'post1'])->name('post1');
    Route::get('/how-regular-brick-maintenance-can-save-you-thousands-in-repairs', [User\HomeController::class, 'post2'])->name('post2');
    Route::get('/what-nyc-property-owners-should-know-about-brick-work-permits', [User\HomeController::class, 'post3'])->name('post3');
    Route::get('/the-hidden-costs-of-ignoring-brick-spalling-on-your-building', [User\HomeController::class, 'post4'])->name('post4');
    Route::get('/do-you-need-brick-grinding-before-repointing-heres-when-and-why', [User\HomeController::class, 'post5'])->name('post5');
    Route::get('/services', [User\HomeController::class, 'services'])->name('services');
    

     // Individual service pages
    Route::get('/services/brick-pointing', [User\HomeController::class, 'brickPointing'])->name('services.brick-pointing');
    Route::get('/services/tuckpointing', [User\HomeController::class, 'tuckpointing'])->name('services.tuckpointing');
    Route::get('/services/spot-pointing', [User\HomeController::class, 'spotPointing'])->name('services.spot-pointing');
    Route::get('/services/brick-grinding', [User\HomeController::class, 'brickGrinding'])->name('services.brick-grinding');
    Route::get('/services/brick-repair-replacement', [User\HomeController::class, 'brickRepair'])->name('services.brick-repair');
    Route::get('/services/stoop-porch-repair', [User\HomeController::class, 'stoopPorchRepair'])->name('services.stoop-porch-repair');
    Route::get('/services/chimney-repair', [User\HomeController::class, 'chimneyRepair'])->name('services.chimney-repair');
    Route::get('/services/brick-parapet-restoration', [User\HomeController::class, 'parapetRestoration'])->name('services.parapet-restoration');
    Route::get('/services/brick-wall-repair', [User\HomeController::class, 'brickWallRepair'])->name('services.brick-wall-repair');
    Route::get('/services/brick-steps-repair', [User\HomeController::class, 'brickStepsRepair'])->name('services.brick-steps-repair');


    
    Route::get('/privacy-policy', function () {
        return view('privacy-policy');
    })->name('privacy-policy');

    Route::get('/terms-of-use', function () {
        return view('terms-of-use');
    })->name('terms-of-use');

    // Route::get('/contact-us', function () {
    //     return view('contact-us');
    // })->name('contact-us');
    // Route::post('/contact-us', [ContactController::class, 'contact'])->name('contact.submit');
});
Route::post('/contact-us', [ContactController::class, 'contact'])->name('contact.submit');
