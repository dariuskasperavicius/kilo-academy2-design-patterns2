<?php

declare(strict_types=1);

namespace App\Booking\Domain\Factory;

use App\Booking\Domain\DTO\BookingRequest;
use DateTimeInterface;

class BookingRequestFactory
{
    public function makeRequest(
        DateTimeInterface $dateFrom,
        DateTimeInterface $dateTo,
        int $peopleCount
    ): BookingRequest {
        return new BookingRequest($dateFrom, $dateTo, $peopleCount);
    }
}
