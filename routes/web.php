<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
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


Route::get('/uploads/{path}', function ($path) {

    $imageUrl = 'https://www.blog.edenconstructionny.com/public/uploads/' . $path;

    $image = @file_get_contents($imageUrl);

    if ($image === false) {
        abort(404);
    }

    return response($image)
        ->header('Content-Type', 'image/png')
        ->header('Cache-Control', 'public, max-age=31536000');

})->where('path', '.*');




Route::group(['as' => 'frontend.'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contact-us', [HomeController::class, 'ContactUs'])->name('contact-us');
    Route::get('/our-services', [HomeController::class, 'ourServices'])->name('our-services');
    Route::get('/brick-pointing', [HomeController::class, 'brickPointing'])->name('services.brick-pointing');
    Route::get('/tuckpointing', [HomeController::class, 'tuckpointing'])->name('services.tuckpointing');
    Route::get('/spot-pointing', [HomeController::class, 'spotPointing'])->name('services.spot-pointing');
    Route::get('/brick-grinding', [HomeController::class, 'brickGrinding'])->name('services.brick-grinding');
    Route::get('/brick-repair-replacement', [HomeController::class, 'brickRepair'])->name('services.brick-repair');
    Route::get('/stoop-porch-repair', [HomeController::class, 'stoopPorchRepair'])->name('services.stoop-porch-repair');
    Route::get('/chimney-repair', [HomeController::class, 'chimneyRepair'])->name('services.chimney-repair');
    Route::get('/brick-parapet-restoration', [HomeController::class, 'parapetRestoration'])->name('services.parapet-restoration');
    Route::get('/brick-wall-repair', [HomeController::class, 'brickWallRepair'])->name('services.brick-wall-repair');
    Route::get('/brick-steps-repair', [HomeController::class, 'brickStepsRepair'])->name('services.brick-steps-repair');
    Route::get('/privacy-policy', [HomeController::class, 'PrivacyPolicy'])->name('privacy-policy');
    Route::get('/terms-of-use', [HomeController::class, 'TermsofUse'])->name('terms-of-use');
});
Route::resource('blog', BlogController::class)->parameters(['blog' => 'slug']);
Route::post('/contact-us', [ContactController::class, 'contact'])->name('contact.submit');

Route::get('sitemap.xml', function () {
    $content = '....';
    return response($content)
        ->header('Content-Type', 'text/xml');
});
