<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssetController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Assets Management
Route::middleware(['auth'])->group(function () {
    Route::get('/assets', [AssetController::class, 'index'])->name('assets.index');
    Route::get('/create-new-asset', [AssetController::class, 'create'])->name('assets.create');
    Route::post('/store-assets', [AssetController::class, 'store'])->name('assets.store');
    Route::get('/edit-asset/{asset}', [AssetController::class, 'edit'])->name('assets.edit');
    Route::put('/update-assets/{asset}', [AssetController::class, 'update'])->name('assets.update');
    Route::delete('/delete-assets/{assset}', [AssetController::class, 'destroy'])->name('assets.destroy');
});
