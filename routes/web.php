<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\RoleController;
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

//End Admin middleware

//Agent middleware

Route::middleware(['auth','role:agent'])->group(function(){

Route::get('/agent/dashboard', [AgentController::class, 'agent'])->name('agent.dashboard');

});

//End Agent middleware

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');


Route::middleware(['auth','role:admin'])->group(function(){
    //Property type all routes
    Route::controller(PropertyTypeController::class)->group(function(){

        Route::get('/admin/property-type/all-type','allType')->name('all.type');
        Route::get('/admin/property-type/all-type/add-type','addType')->name('add.type');
        Route::post('/admin/property-type/all-type/store-type','storeType')->name('store.type');
        Route::get('/admin/property-type/all-type/edit-type/{id}','editType')->name('edit.type');
        Route::post('/admin/property-type/all-type/update-type','updateType')->name('update.type');
        Route::get('/admin/property-type/all-type/delete-type/{id}','deleteType')->name('delete.type');
        
});

//Amenities all routes
Route::controller(PropertyTypeController::class)->group(function(){

    Route::get('/admin/amenity/all-amenity','allAmenity')->name('all.amenities');
    Route::get('/admin/amenity/all-amenity/add-amenity','addAmenity')->name('add.amenity');
    Route::post('/admin/amenity/all-amenity/store-amenity','storeAmenity')->name('store.amenity');
    Route::get('/admin/amenity/all-amenity/edit-amenity/{id}','editAmenity')->name('edit.amenity');
    Route::post('/admin/amenity/all-amenity/update-amenity','updateAmenity')->name('update.amenity');
    Route::get('/admin/amenity/all-amenity/delete-amenity/{id}','deleteAmenity')->name('delete.amenity');
    
});

//Permissions all routes
Route::controller(RoleController::class)->group(function(){

    Route::get('/admin/roles-and-permissions/all-permission','allPermission')->name('all.permissions');
    Route::get('/admin/roles-and-permissions/all-permission/add-permission','addPermission')->name('add.permission');
    Route::post('/admin/roles-and-permissions/all-permission/store-permission','storePermission')->name('store.permission');
    Route::get('/admin/roles-and-permissions/all-permission/edit-permission/{id}','editPermission')->name('edit.permission');
    Route::post('/admin/roles-and-permissions/all-permission/update-permission','updatePermission')->name('update.permission');
    Route::get('/admin/roles-and-permissions/all-permission/delete-permission/{id}','deletePermission')->name('delete.permission');

    Route::get('/admin/roles-and-permissions/all-permission/import-permission','importPermission')->name('import.permission');
    Route::get('/admin/roles-and-permissions/all-permission/export-permission','export')->name('export');
    Route::post('/admin/roles-and-permissions/all-permission/import-permission','import')->name('import');
    
});

//Roles all routes
Route::controller(RoleController::class)->group(function(){

    Route::get('/admin/roles-and-permissions/all-role','allrole')->name('all.roles');
    Route::get('/admin/roles-and-permissions/all-role/add-role','addRole')->name('add.role');
    Route::post('/admin/roles-and-permissions/all-role/store-role','storeRole')->name('store.role');
    Route::get('/admin/roles-and-permissions/all-role/edit-role/{id}','editRole')->name('edit.role');
    Route::post('/admin/roles-and-permissions/all-role/update-role','updateRole')->name('update.role');
    Route::get('/admin/roles-and-permissions/all-role/delete-role/{id}','deleteRole')->name('delete.role');

    Route::get('/admin/roles-and-permissions/add-roles-permission','addRolesPermission')->name('add.roles.permission'); 
});
});

 
