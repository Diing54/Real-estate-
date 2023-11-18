<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin middleware

Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/admin/change/password', [AdminController::class, 'changePassword'])->name('admin.change.password');
    Route::post('/admin/change/password', [AdminController::class, 'updatePassword'])->name('admin.password.update');
    

});

//Agent middleware

Route::middleware(['auth','role:agent'])->group(function(){

Route::get('/agent/dashboard', [AgentController::class, 'agent'])->name('agent.dashboard');

});

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');


Route::middleware(['auth','role:admin'])->group(function(){
    //property all route
    Route::controller(PropertyTypeController::class)->group(function(){

    Route::get('/admin/property-type/all-type','allType')->name('all.type');
        
});
});

 
