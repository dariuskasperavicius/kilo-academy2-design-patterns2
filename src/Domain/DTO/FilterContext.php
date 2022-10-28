<?php

declare(strict_types=1);

namespace App\Booking\Domain\DTO;

class FilterContext
{
    public function __construct(private int $priceFrom, private int $priceTo)
    {
    }

    public function getPriceFrom(): int
    {
        return $this->priceFrom;
    }

    public function getPriceTo(): int
    {
        return $this->priceTo;
    }
}
