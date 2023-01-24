<?php
declare(strict_types=1);
namespace App\DataObjects;

use App\Http\Requests\StoreReservationRequest;
use stdClass;

class ReservationData {
    public function __construct(
        public readonly stdClass $origin,
        public readonly stdClass $destination,
    )
    {
        
    }

    public static function make(StoreReservationRequest $request)
    {
        return new static(
            origin: json_decode($request->get('origin')),
            destination: json_decode($request->get('destination'))
        );
    }
}