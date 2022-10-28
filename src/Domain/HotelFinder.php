<?php

declare(strict_types=1);

namespace App\Booking\Domain;

use App\Booking\Domain\DTO\BookingRequest;
use App\Booking\Domain\DTO\FilterContext;
use App\Booking\Domain\Filter\PriceFilter;
use App\Booking\Domain\Provider\ProviderInterface;
use App\Booking\Domain\Sorter\ResultByPriceSorter;
use App\Booking\Domain\Sorter\ResultSorterInterface;

class HotelFinder
{
    /** @var ProviderInterface[]  */
    private array $adapters;

    public function __construct(private PriceFilter $filter, private ?ResultSorterInterface $sorter = null)
    {
    }

    public function find(BookingRequest $request, FilterContext $filterContext)
    {
        $finalResult = new \AppendIterator();
        $findSorter = $this->findSorter($request);

        foreach ($this->adapters as $adapter) {
            $result = $adapter->find($request);
            $finalResult->append($result);
        }

        $this->filter->filter($finalResult, $filterContext);

        return $findSorter->applySort($finalResult);
    }

    public function findSorter(BookingRequest $request): ResultSorterInterface
    {
        if ($this->sorter === null && $request->getSortBy() === null) {
            return new ResultByPriceSorter();
        }
    }

    public function addProvider(ProviderInterface $provider): void
    {
        $this->adapters[] = $provider;
    }
}
