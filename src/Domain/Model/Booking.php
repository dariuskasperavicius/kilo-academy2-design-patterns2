<?php

declare(strict_types=1);

namespace App\Booking\Domain\Model;

class Booking
{
    private string $id;
    private string $hotel;
    private string $room;
    private \DateTimeInterface $dateFrom;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getHotel(): string
    {
        return $this->hotel;
    }

    /**
     * @param string $hotel
     */
    public function setHotel(string $hotel): void
    {
        $this->hotel = $hotel;
    }

    /**
     * @return string
     */
    public function getRoom(): string
    {
        return $this->room;
    }

    /**
     * @param string $room
     */
    public function setRoom(string $room): void
    {
        $this->room = $room;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFrom(): \DateTimeInterface
    {
        return $this->dateFrom;
    }

    /**
     * @param \DateTimeInterface $dateFrom
     */
    public function setDateFrom(\DateTimeInterface $dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }
}
