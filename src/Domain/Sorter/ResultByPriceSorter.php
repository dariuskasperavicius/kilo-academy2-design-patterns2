<?php

declare(strict_types=1);

namespace App\Booking\Domain\Sorter;

use Iterator;

class ResultByPriceSorter implements ResultSorterInterface
{
    public function applySort(Iterator $collection)
    {
        return $collection;
    }
}
