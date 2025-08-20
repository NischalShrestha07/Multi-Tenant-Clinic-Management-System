<?php

declare(strict_types=1);

use App\Http\Controllers\App\ImportController;
use App\Http\Controllers\App\ProductController;
use App\Http\Controllers\App\ProfileController;
use App\Http\Controllers\App\UserController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;

Route::domain('{tenant}.localhost')->middleware([
    'web',
    InitializeTenancyByDomain::class,
])->group(function () {
    Route::get('/', function () {
        return view('app.welcome');
    });

    Route::name('tenant.')->middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('app.dashboard');
        })->middleware(['verified'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::middleware('role:admin')->group(function () {
            Route::resource('users', UserController::class);
            Route::resource('products', ProductController::class);
            Route::resource('imports', ImportController::class);
        });
    });

    require __DIR__ . '/tenant-auth.php'; // tenant-specific auth routes
});


///here is the issue of "not found" in localhost:8000 route
/*to solve cmt     require __DIR__ . '/tenant-auth.php'; and middleware top code & optimize
*/
