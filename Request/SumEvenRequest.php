<?php

declare(strict_types=1);

namespace app\Request;

use app\Dto\NumbersDto;
use app\Exception\JsonValidateException;
use App\Exception\RequestWrongFormatException;

class SumEvenRequest extends BaseRequest
{
    private array $numbers;

    public function __construct(
        public readonly string $body
    ){
    }

    public function validateRequest(): bool
    {
        return $this->jsonValidate($this->body);
    }

    public function getRequestDto(): ?NumbersDto
    {
        if (!$this->validateRequest()) {
            throw new JsonValidateException();
        }

        $jsonData = $this->jsonDecode($this->body);
        if (!isset($jsonData['numbers'])) {
            throw new RequestWrongFormatException();
        }

        return new NumbersDto($jsonData['numbers']);
    }
}