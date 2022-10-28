<?php

namespace App\Booking\Domain\Sorter;

use Iterator;

interface ResultSorterInterface
{
    public function applySort(Iterator $collection);
}
