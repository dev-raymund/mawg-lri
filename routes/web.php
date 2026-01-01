<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

use App\Http\Controllers\RolePermissionsController;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('users', function () {
        return Inertia::render('users');
    })->name('users');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('partners', function () {
        return Inertia::render('partners');
    })->name('partners');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('bookings', function () {
        return Inertia::render('bookings');
    })->name('bookings');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('products', function () {
        return Inertia::render('products');
    })->name('products');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('orders', function () {
        return Inertia::render('orders');
    })->name('orders');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('reports', function () {
        return Inertia::render('reports');
    })->name('reports');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('withdraw', function () {
        return Inertia::render('withdraw');
    })->name('withdraw');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('announcement', function () {
        return Inertia::render('announcement');
    })->name('announcement');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/role-permissions', [RolePermissionsController::class, 'index'])
        ->name('role_permissions');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('chat', function () {
        return Inertia::render('chat');
    })->name('chat');
});

require __DIR__.'/settings.php';
