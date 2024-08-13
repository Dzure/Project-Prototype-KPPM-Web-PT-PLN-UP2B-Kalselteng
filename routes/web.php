<?php

use App\Http\Controllers\BeritaKegiatanController;
use App\Http\Controllers\CarouselImageController;
use App\Http\Controllers\ProfilUP2BController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoCarouselController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);

//login
Route::get("/login", [SessionController::class, 'index'])->name('login');
Route::post("/login/masuk", [SessionController::class, 'login']);

//middleware
Route::middleware(['auth'])->group(function () {


    //beritakegiatan
    Route::get('/admin/beritakegiatan', [BeritaKegiatanController::class, 'adminindex']);
    Route::get('/admin/beritakegiatan/create', [BeritaKegiatanController::class, 'create']);
    Route::post('/admin/beritakegiatan/store', [BeritaKegiatanController::class, 'store']);
    Route::get('/admin/beritakegiatan/checkSlug', [BeritaKegiatanController::class, 'checkSlug']);
    Route::get('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'adminshow']);
    Route::get('/admin/beritakegiatan/{beritakegiatan}/edit', [BeritaKegiatanController::class, 'edit']);
    Route::put('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'update']);
    Route::delete('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'destroy']);

    // User Profile
    Route::get('/admin/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/admin/account-settings', [UserController::class, 'accountSettings'])->name('account.settings');
    Route::post('/admin/account-settings/change-password', [UserController::class, 'changePassword'])->name('change.password');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    

    // Route to display the admin homepage edit view
    Route::get('/admin/homepage-edit', function () {
        $carouselImages = \App\Models\CarouselImage::all();
        $photoCarouselImages = \App\Models\PhotoCarousel::all();
        return view('carousel-images.adminindex', compact('carouselImages', 'photoCarouselImages'));
    })->name('carousel-images.adminindex');
    Route::get('/admin/homepage-edit/{id}/edit', [CarouselImageController::class, 'edit']);
    Route::put('/admin/homepage-edit/{id}', [CarouselImageController::class, 'update']);
    Route::get('/admin/photo-edit/create', [PhotoCarouselController::class, 'create']);
    Route::post('/admin/photo-edit/store', [PhotoCarouselController::class, 'store']);
    Route::get('/admin/photo-edit/{id}/edit', [PhotoCarouselController::class, 'edit']);
    Route::put('/admin/photo-edit/{id}', [PhotoCarouselController::class, 'update']);
    Route::delete('/admin/photo-edit/{id}', [PhotoCarouselController::class, 'destroy']);


    //profil UP2B
    Route::get('/admin/profilup2b', [ProfilUP2BController::class, 'profilup2b'])->name('profilup2b');   
    Route::get('/admin/profilup2b/create', [ProfilUP2BController::class, 'create']);
    Route::post('/admin/profilup2b', [ProfilUP2BController::class, 'store']);
    Route::get('/admin/profilup2b/edit/{id}', [ProfilUP2BController::class, 'editProfilup2b']);
    Route::put('/admin/profilup2b/update/{id}', [ProfilUP2BController::class, 'updateProfilup2b']); 
});




//berita kegiatan
Route::get('/beritakegiatan/{slug}', [BeritaKegiatanController::class, 'usershow'])->name('blog-details');
Route::get('/beritakegiatan', [BeritaKegiatanController::class, 'userview']);

//profile
Route::get('/profilup2b', [ProfilUP2BController::class, 'index']);

