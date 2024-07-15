<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminAuthController;
//use App\Http\Controllers\admin\AdminController;

use App\Http\Controllers\dashboard\CdrsController;
use App\Http\Controllers\dashboard\LoginController;
use App\Http\Controllers\dashboard\UsersController;
use App\Http\Controllers\dashboard\UserProfileController;
use App\Http\Controllers\dashboard\ExtensionsController;
use App\Http\Controllers\dashboard\DashboardController;
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


//Route::get('/', [LoginController::class, 'index'])->name('login.index');


//  Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
//  Route::post('/', [AdminAuthController::class, 'login'])->name('admin.login.submit');
//  Route::post('/', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Route::group(['middleware' => ['admin.auth']], function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });
// Route::get('/', function () {
//     return view('pages.login.index');
// });
// Route::get('/dashboard', function () {
//     return view('pages.dashboard.index');
// });

// Route::group(['prefix' => 'dashboard'], function () {
//     Route::get('/', [CdrsController::class, 'index'])->name('cdrs.index');
//     //Route::get('/{blog_slug}', [BlogsController::class, 'singleBlog'])->name('blogs.single');
// });


Route::group(['prefix' => '/'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login.index');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/users', [AdminDashboardController::class, 'users'])->name('admin.users');
        Route::get('/export-excel', [DashboardController::class, 'excelExport'])->name('export.excell');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');
        Route::get('/logout', [AdminDashboardController::class, 'logout'])->name('admin.logout');

        Route::group(['prefix' => 'users', 'middleware' => 'role:admin'], function () {
            Route::get('/', [UsersController::class, 'index'])->name('admin.users');
            Route::get('/fetchusersAll', [UsersController::class, 'fetchuserAll'])->name('users.fetchusers');
            Route::post('/usersActive', [UsersController::class, 'userActive'])->name('users.userActive');
            Route::get('/create', [UsersController::class, 'create'])->name('users.create');
            Route::post('/save', [UsersController::class, 'save'])->name('users.save');
            Route::get('/{page_id}/delete', [UsersController::class, 'delete'])->name('users.delete');
            Route::get('/{page_id}/edit', [UsersController::class, 'edit'])->name('users.edit');
            Route::post('/{page_id}/update', [UsersController::class, 'update'])->name('users.update');
            Route::post('/saveRecord', [UsersController::class, 'saveRecord'])->name('users.saveRecord');
        });

        Route::group(['prefix' => 'profile'], function () {
            Route::get('/{page_id}/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
            Route::post('/{page_id}/update', [UserProfileController::class, 'update'])->name('profile.update');
        });

        Route::group(['prefix' => 'extensions', 'middleware' => 'role:admin'], function () {
            Route::get('/{page_id}/edit', [ExtensionsController::class, 'edit'])->name('extensions.edit');
            Route::post('/{page_id}/update', [ExtensionsController::class, 'update'])->name('extensions.update');
        });
    });
});
