<?php

declare(strict_types=1);

namespace App\Booking\Domain\Provider\BookingCom;

use App\Booking\Components\Booking\BookingComSearcher;
use App\Booking\Domain\DTO\BookingRequest;
use App\Booking\Domain\Model\Booking;
use App\Booking\Domain\Model\BookingCollection;
use App\Booking\Domain\Provider\ProviderInterface;

class BookingComProviderAdapter implements ProviderInterface
{
    public function __construct(private BookingComSearcher $client)
    {
    }

    public function find(BookingRequest $request): BookingCollection
    {
        $resultArray = $this->client->findBy($request->getDateFrom()->format('Y-m-d'));
        $bookings = $this->createBookings($resultArray);
        $bookingCollection = new BookingCollection();
        foreach ($bookings as $booking) {
            $bookingCollection->addResult($booking);
        }
        return $bookingCollection;
    }

    public function createBookings(iterable $resultArray)
    {
        foreach ($resultArray as $item) {
            $booking = new Booking();
            $booking->setHotel($item['hotel']);
            yield $booking;
        }
    }
}
