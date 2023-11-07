<?php

use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\ConfiguratorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelpCenterController;
use App\Http\Controllers\SignalController;
use App\Http\Controllers\SignalFollowersController;
use App\Http\Controllers\WhitelabelController;
use App\Models\SignalProvider;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });
    Route::get('/signals', [SignalController::class, 'index'])->name('signals');
    Route::get('/analysis', [AnalysisController::class, 'index'])->name('analysis');
    Route::get('/signal-followers', [SignalFollowersController::class, 'index'])->name('signal-followers');


    Route::name('configurator')->group(function () {
        Route::get('/accounts', [ConfiguratorController::class, 'accounts'])->name('configurator.accounts');
        // Route::resource('trade-copier', ConfiguratorController::class);

        // Route::resource('equity-monitor', ConfiguratorController::class);

        // Route::resource('email-alerts', ConfiguratorController::class);
    });

    Route::name('signal-provider.')->group(function () {
        Route::resource('/signal-provider/manage', SignalProvider::class);
    });

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

    Route::name('whitelabel.')->group(function () {
        Route::get('/whitelabel/setup', [WhitelabelController::class, 'setup']);
    });

    Route::name('help-center.')->group(function () {
        Route::get('/help-center/knowledge-base', [HelpCenterController::class, 'knowledge-base']);
        Route::get('/help-center/faq', [HelpCenterController::class, 'faq']);
        Route::get('/help-center/contact-support', [HelpCenterController::class, 'contact-support']);
    });
});

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
