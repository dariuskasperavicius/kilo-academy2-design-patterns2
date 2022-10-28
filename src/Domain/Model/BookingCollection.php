<?php

declare(strict_types=1);

namespace App\Booking\Domain\Model;

use IteratorAggregate;
use ArrayIterator;
use Iterator;

class BookingCollection implements IteratorAggregate, Iterator
{
    private array $data;

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    public function getIterator()
    {
        return new ArrayIterator($this->data);
    }

    public function addResult(Booking $booking)
    {
        $this->data[] = $booking;
    }
}
