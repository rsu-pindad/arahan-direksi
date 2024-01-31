<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BerandaController;
use App\Livewire\Beranda;
use App\Livewire\LoginUser;
use App\Livewire\RegisterUser;
use App\Livewire\Pic\Pic;
use App\Livewire\Profile\UserProfile;
use App\Livewire\Progress\Progress;
use App\Livewire\Progress\ProgressArahan;
use App\Livewire\Arahan\Arahan;

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

// Route::get('/', [Beranda::class, 'render'])->name('beranda');
Route::get('/', [BerandaController::class, 'render'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'render']);
Route::get('/login', LoginUser::class)->name('login');
Route::get('/logout', [LoginUser::class,'logout'])->name('logout');
Route::get('/register', RegisterUser::class)->name('register');

// PIC 
Route::get('/pic', Pic::class);

// User Profiel
Route::get('/profile', UserProfile::class);

// Master Progress
Route::get('/progress', Progress::class);

// Master Arahan
Route::get('/arahan', Arahan::class);

Route::get('/progress-arahan', ProgressArahan::class);