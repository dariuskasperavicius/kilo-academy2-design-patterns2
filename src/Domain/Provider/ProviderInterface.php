<?php

declare(strict_types=1);

namespace App\Booking\Domain\Provider;

use App\Booking\Domain\DTO\BookingRequest;
use App\Booking\Domain\Model\BookingCollection;

interface ProviderInterface
{
    public function find(BookingRequest $request): BookingCollection;
}
