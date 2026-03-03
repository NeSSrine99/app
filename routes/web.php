<?php



Route::get('/', function () {
    return view('Home.home'); 
});

Route::view('/login', 'Auth.Login')->name('login');
Route::view('/register', 'Auth.Register')->name('register');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('Admin.Dashboard.dashboard');
    })->name('admin.dashboard');

    Route::get('/maps', function () {
        return view('Admin.Maps.maps');
    })->name('admin.maps');

    Route::get('/settings', function () {
        return view('Admin.Setting.setting');
    })->name('admin.settings');

    Route::get('/tables', function () {
        return view('Admin.tables');
    })->name('admin.tables');
});

