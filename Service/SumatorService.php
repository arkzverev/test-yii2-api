<?php

namespace app\Service;

use app\Dto\NumbersDto;
use app\Interface\SumatorInterface;

class SumatorService implements SumatorInterface
{
    public function sumEven(NumbersDto $dto): int
    {
        return array_sum(array_filter($dto->numbers, function($number) {
            return $number % 2 === 0;
        }));
    }

}