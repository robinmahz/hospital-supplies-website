<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resources([
    '/' => LandingPageController::class,
    '/contact' => ContactController::class,
    '/shop' => ShopController::class,
]);

Route::get("/shop/{category}/{product}", [ShopController::class, "product"]);

Route::get("/about", function () {
    return view("hospital.pages.about");
});
Route::get("/shoping", function () {
    return view("hospital.pages.product");
});

Route::get("/dashboard", function () {
    return view("dashboard");
})
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );

    Route::resources([
        'product' => ProductController::class,
        'category' => CategoryController::class,
        'gallery' => GalleryController::class,
    ]);
    Route::delete('/productgallery/{id}', [ProductGalleryController::class, "destroy"]);
});

require __DIR__ . "/auth.php";
