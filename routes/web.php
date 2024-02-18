<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Beranda;
use App\Livewire\LoginUser;
use App\Livewire\RegisterUser;

use App\Livewire\Pic\Pic;
use App\Livewire\Pic\PicView;
use App\Livewire\Pic\PicEdit;
use App\Livewire\Pic\ViewTables as TablePic;

use App\Livewire\Profile\UserProfile;
use App\Livewire\Profile\ViewTables as TableProfile;

use App\Livewire\Progress\Progress;
use App\Livewire\Progress\ProgressEdit;
use App\Livewire\Progress\ProgressView;

use App\Livewire\Progress\ProgressArahan;
use App\Livewire\Progress\ProgressArahanOpen;
use App\Livewire\Progress\ViewTables as TableProgress;

use App\Livewire\Arahan\Arahan;
use App\Livewire\Arahan\AssignArahan;
use App\Livewire\Arahan\StepperArahan;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function(){
    return Redirect::intended('/login');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', RegisterUser::class)->name('register');
    Route::get('/login', LoginUser::class)->name('login');
});

Route::middleware('auth')->group(function () {
    
    Route::get('/logout', [LoginUser::class,'logout'])->name('logout');
    Route::get('/beranda', Beranda::class)->name('beranda');
    
    // Pic
    Route::get('/pic', Pic::class)->name('pic');
    Route::get('/pic/table', TablePic::class)->name('pic-table');
    Route::get('/pic/view/{id}', PicView::class)->name('pic-view');
    Route::get('/pic/edit/{id}', PicEdit::class)->name('pic-edit');

    // User Profile
    Route::get('/profile', UserProfile::class)->name('profile');
    Route::get('/profile/table', TableProfile::class)->name('profile-table');
    
    // Master Progress
    Route::get('/progress', Progress::class)->name('progress');
    Route::get('/progress/view/{id}', ProgressView::class)->name('progress-view');
    Route::get('/progress/edit/{id}', ProgressEdit::class)->name('progress-edit');
    Route::get('/progress/table', TableProgress::class)->name('progress-table');

    // Master Arahan
    Route::get('/arahan', StepperArahan::class)->name('arahan');

    // Assign Arahan / kanban arahan
    Route::get('/assign-arahan', AssignArahan::class)->name('assign-arahan');

    // Progress Arahan
    Route::get('/progress-arahan', ProgressArahan::class)->name('progress-arahan');
    Route::get('/progress-arahan/{id}', ProgressArahanOpen::class)->name('progress-arahan-detail');

});
