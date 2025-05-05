<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation.form');

Route::post('/reservation', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string',
        'guests' => 'required|integer|min:1',
        'date' => 'required|date',
        'request' => 'nullable|string',
    ]);

    return view('reservation-details', ['data' => $data]);
})->name('reservation.submit');
