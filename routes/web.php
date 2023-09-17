<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Route Hooks - Do not delete//
Route::view('flights', 'livewire.flights.index')->middleware('auth', 'role:super-admin|admin|user');
Route::view('airlines', 'livewire.airlines.index')->middleware('auth', 'role:super-admin|admin|user');
Route::view('registrations', 'livewire.registrations.index')->middleware('auth', 'role:super-admin|admin|user');
Route::view('schedules', 'livewire.schedules.index')->middleware('auth', 'role:super-admin|admin');
Route::view('delays', 'livewire.delays.index')->middleware('auth', 'role:super-admin|admin');
Route::view('services', 'livewire.services.index')->middleware('auth', 'role:super-admin|admin');
Route::view('permissions', 'livewire.permissions.index')->middleware('auth', 'role:super-admin|admin');
Route::view('roles', 'livewire.roles.index')->middleware('auth', 'role:super-admin|admin');
Route::view('users', 'livewire.users.index')->middleware('auth', 'role:super-admin|admin|user');
Route::view('posts', 'livewire.posts.index')->middleware('auth', 'role:super-admin|admin|user');
Route::view('flights', 'livewire.flights.index')->middleware('auth', 'role:super-admin|admin|user');
Route::view('airlines', 'livewire.airlines.index')->middleware('auth', 'role:super-admin|admin|user');
Route::view('registrations', 'livewire.registrations.index')->middleware('auth', 'role:super-admin|admin|user');
Route::view('schedules', 'livewire.schedules.index')->middleware('auth', 'role:super-admin|admin');
Route::view('delays', 'livewire.delays.index')->middleware('auth', 'role:super-admin|admin');
Route::view('services', 'livewire.services.index')->middleware('auth', 'role:super-admin|admin');
Route::view('permissions', 'livewire.permissions.index')->middleware('auth', 'role:super-admin|admin');
Route::view('roles', 'livewire.roles.index')->middleware('auth', 'role:super-admin|admin');
Route::view('users', 'livewire.users.index')->middleware('auth', 'role:super-admin|admin|user');


Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');