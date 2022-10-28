<?php

declare(strict_types=1);

namespace App\Booking\Domain\DTO;

use DateTimeInterface;

class BookingRequest
{
    private int $priceFrom;
    private int $priceTo;
    private string $sortBy;

    public function __construct(
        private DateTimeInterface $dateFrom,
        private DateTimeInterface $dateTo,
        private int $peopleCount
    ) {
    }

    public function getDateFrom(): DateTimeInterface
    {
        return $this->dateFrom;
    }

    public function getDateTo(): DateTimeInterface
    {
        return $this->dateTo;
    }

    public function getPeopleCount(): int
    {
        return $this->peopleCount;
    }

    public function getPriceFrom(): int
    {
        return $this->priceFrom;
    }

    public function setPriceFrom(int $priceFrom): BookingRequest
    {
        $this->priceFrom = $priceFrom;
        return $this;
    }

    public function getPriceTo(): int
    {
        return $this->priceTo;
    }

    public function setPriceTo(int $priceTo): BookingRequest
    {
        $this->priceTo = $priceTo;
        return $this;
    }

    public function getSortBy(): string
    {
        return $this->sortBy;
    }
}
