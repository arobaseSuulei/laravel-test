<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Models\Booking;
Route::get('/', function () {
    $properties = Property::all();
    return view('welcome', [
        'property' => $properties,
    ]);
});

Route::get('/add_properties', function () {
    return view('admin.properties');
});

Route::get('/index/{id}', function ($id) {
    $properties = Property::find($id);
    return view('index', [
        'property' => $properties,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/booking/{id}', function ($id) {
    Booking::create([
        'user_id'     => auth()->id(),
        'property_id' => $id,
        'start_date'  => request('start_date'),
        'end_date'    => request('end_date'),
    ]);
    return redirect('/')->with('success', 'Réservation effectuée !');
})->middleware('auth');


Route::get('/reservations', function () {
    $bookings = Booking::where('user_id', auth()->id())->with('property')->get();
    return view('reservations', ['bookings' => $bookings]);
})->middleware('auth');

require __DIR__.'/auth.php';
