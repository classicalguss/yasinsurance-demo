<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamMemberController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('team', 'team')
	->middleware(['auth', 'verified'])
	->name('team');

Route::view('insurance', 'insurance')
	->middleware(['auth', 'verified'])
	->name('insurance');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
	Route::resource('teams', TeamController::class)
		->except(['edit','show']);
	Route::post   ('teams/{team}/members',      [TeamMemberController::class,'store'])->name('teams.members.store');
	Route::delete ('teams/{team}/members/{user}', [TeamMemberController::class,'destroy']);
	Route::post   ('teams/{team}/switch',       [TeamController::class,'switch'])
		->name('teams.switch');
});

Route::get('/car-insurance', function() {
	return view('car-demo');
});

Route::get('/car-listing', function() {
	return view('car-listing');
});

Route::get('/car-checkout', function() {
	return view('car-checkout');
});

Route::get('/car-booking', function() {
	return view('car-booking');
});

Route::get('/car-aggregator', [DemoController::class, 'aggregator']);

Route::post('/checkout', [DemoController::class, 'checkout'])->name('checkout');


require __DIR__.'/auth.php';
