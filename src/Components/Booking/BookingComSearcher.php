<?php

declare(strict_types=1);

namespace App\Booking\Components\Booking;

class BookingComSearcher
{
    public function findBy(string $dateFrom, $hotel = null)
    {
        return [
            ['hotel' => ['Ryoal Sea Abrakadabar'], 'room' => 'Room Sea view', ['from' => '2022-11-04']],
        ];
    }
}
