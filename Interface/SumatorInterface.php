<?php

namespace app\Interface;

use app\Dto\NumbersDto;

interface SumatorInterface
{
    public function sumEven(NumbersDto $dto): int;
}