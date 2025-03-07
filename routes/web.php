<?php

use App\Livewire\AdminPage;
use App\Livewire\Crud;
use App\Livewire\MainPage;
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

Route::view('/', 'welcome');

Route::get('/crud',Crud::class)->middleware("isAdmin");
Route::get('/main',MainPage::class);
Route::get('/role',UserRole::class);
Route::get('/admin',AdminPage::class);
Route::get('/user',UserList::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';