<?php

namespace app\Dto;

final class NumbersDto
{
    public function __construct(
        public readonly array $numbers
    ){
    }
}