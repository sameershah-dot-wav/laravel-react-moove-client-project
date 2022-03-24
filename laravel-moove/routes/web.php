<?php

use App\Http\Controllers\Auth\ForgottenPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserConvertController;
use App\Http\Controllers\Admin\AdminInvLandlordController;
use App\Http\Controllers\AdminApplicationController;
use App\Http\Controllers\Admin\AdminPropertyController;
use App\Http\Controllers\Admin\AdminApplicationController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Tenant\ApplicationController;
use App\Http\Controllers\Tenant\TenantController;
use App\Http\Controllers\Tenant\TenantAptController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Tenant\TenantApplyController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Landlord\LandlordController;
use App\Http\Controllers\Landlord\LandlordPropertyController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;


// Auth routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/forgot-password', [ForgottenPasswordController::class, 'index'])->name('password.request');
Route::post('/forgot-password', [ForgottenPasswordController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'index'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'store'])->middleware('guest')->name('password.update');


// General routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/get-video', [VideoController::class, 'index']) ->name('get-video');
Route::get('/get-video', function() {
    return view('tenant.tenant-get-video');
});

// Tenant routes
Route::get('/tenant-home', [TenantController::class, 'index'])->name('tenant.home');
Route::get('/book-appointment', [TenantAptController::class, 'index'])->name('tenant.bookapt');
Route::get('/tenant-upload-video', function() {
    return view('tenant.tenant-upload-video');
});
Route::post('/tenant-upload-video', [VideoController::class, 'uploadVideo'])->name('tenant.tenant-upload-video');

Route::get('/apply-tenancy', [TenantApplyController::class, 'index'])->name('tenant.apply-tenancy');

// Landlord routes
Route::get('/landlord-home', [TenantController::class, 'index'])->name('landlord.home');
Route::get('/application', [ApplicationController::class, 'index'])->name('tenant.application');
Route::get('/start-application', [ApplicationController::class, 'create'])->name('tenant.start-application');
Route::post('/start-application', [ApplicationController::class, 'store']);
Route::post('/tenant-upload', [FileController::class, 'store'])->name('tenant.upload');
Route::get('/landlord-home', [LandlordController::class, 'index'])-> name('landlord.home');
Route::get('/properties', [LandlordPropertyController::class, 'index'])-> name('landlord.landlord-properties');
Route::post('/properties', [LandlordPropertyController::class, 'store']); 
Route::get('/tenants/{id}', [LandlordPropertyController::class, 'tenants']);


// Admin routes
Route::get('/admin-home', [AdminController::class, 'index'])->name('admin.home');
Route::get('/convert-user', [UserConvertController::class, 'index'])->name('admin.convert-user');
Route::put('/convert-user', [UserConvertController::class, 'update']);
Route::get('/admin-tenant-list', [AdminApplicationController::class, 'index'])->name('admin-tenant-list');
Route::get('/admin-tenant-application/{id}', [AdminApplicationController::class, 'show']);
Route::put('/admin-change-application', [AdminApplicationController::class, 'update'])->name('admin-change-application');
Route::get('/admin-invite-landlord', [AdminInvLandlordController::class, 'index'])->name('admin.invite-landlord');
Route::get('/admin-all-properties', [AdminPropertyController::class, 'index'])->name('admin.all-properties');
