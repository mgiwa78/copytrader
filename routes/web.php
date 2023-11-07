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
use App\Http\Controllers\SignalProviderController;
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

    Route::get('/signals', [SignalController::class, 'index'])->name('signals');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

    // Route::get('/signals', [SignalController::class, 'index'])->name('signals');

    Route::get('/analysis', [AnalysisController::class, 'index'])->name('analysis');
    Route::get('/signal-followers', [SignalFollowersController::class, 'index'])->name('signal-followers');

    Route::prefix('configurator')->group(function () {
        Route::get('accounts', [ConfiguratorController::class, 'accounts'])->name('configurator.accounts');
        Route::get('trade-copier', [ConfiguratorController::class, 'tradeCopier'])->name('configurator.trade-copier');
        Route::get('equity-monitor', [ConfiguratorController::class, 'equityMonitor'])->name('configurator.equity-monitor');
        Route::get('email-alerts', [ConfiguratorController::class, 'emailAlerts'])->name('configurator.email-alerts');
    });

    // Route::name('configurator')->group(function () {
    //     Route::get('/accounts', [ConfiguratorController::class, 'accounts'])->name('configurator.accounts');
    // Route::resource('trade-copier', ConfiguratorController::class);

    // Route::resource('equity-monitor', ConfiguratorController::class);

    // Route::resource('email-alerts', ConfiguratorController::class);
    // });

    Route::prefix('signal-provider')->group(function () {
        Route::get('manage', [SignalProviderController::class, 'manage'])->name('signal-provider.manage');
    });

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

    Route::prefix('whitelabel')->group(function () {
        Route::get('setup', [WhitelabelController::class, 'setup'])->name('whitelabel.setup');
    });

    Route::prefix('help-center')->group(function () {
        Route::get('knowledge-base', [HelpCenterController::class, 'knowledgeBase'])->name('help-center.knowledge-base');
        Route::get('faq', [HelpCenterController::class, 'faq'])->name('help-center.faq');
        Route::get('contact-support', [HelpCenterController::class, 'contactSupport'])->name('help-center.contact-support');
    });
});

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
