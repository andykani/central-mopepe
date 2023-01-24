<?php

use App\Http\Controllers\ReservationController;
use App\Http\Resources\Reservation as ResourcesReservation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('reservations', ReservationController::class);

Route::post('launch/{id}', function(Request $request){
    
    
    $reservation = Reservation::findOrFail($request->id);
    
    if($reservation->started_at === null){

        $reservation->started_at = now()->toDateTimeString();
        $reservation->save();
    }

    return new ResourcesReservation($reservation);

})->whereNumber('id');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
