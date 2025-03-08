<?php

use App\Http\Controllers\Testprint;
use App\Livewire\AdminPage;
use App\Livewire\Crud;
use App\Livewire\MainPage;
use App\Livewire\PrintPage;
use App\Livewire\UserList;
use App\Livewire\UserRole;
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

Route::get('/crud', Crud::class);
Route::get('/', MainPage::class);
Route::get('/role', UserRole::class);
Route::get('/admin', AdminPage::class)->middleware("isAdmin");
Route::get('/user_profile', UserList::class);
Route::get('/print_page', PrintPage::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('download-pdf/{id}', [Testprint::class, 'downloadPDF']);

require __DIR__ . '/auth.php';
