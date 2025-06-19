<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\OfficeController;
use App\Models\Office;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'welcome'])->name('welcome');

Route::get('/eval/create/{office}', [GuestController::class, 'createEvaluation'])->name('eval.create');

Route::post('/eval/store/{office}', [GuestController::class, 'storeEvaluation'])->name('eval.store');

Route::get('/eval/finish', [GuestController::class, 'finish'])->name('finish');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('login', [AuthController::class, 'loginForm'])->middleware('guest')
->name('login.form');


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        $offices = Office::orderBy('name')->get();
        return view('home', compact('offices'));
    })->name('home');

    Route::resource('offices', OfficeController::class)->only(['show','index','store','update','destroy'])
        ->names([
            'index' => 'offices.index',
            'show' => 'offices.show',
            'store' => 'offices.store',
            'update' => 'offices.update',
            'destroy' => 'offices.destroy',
        ]);

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
