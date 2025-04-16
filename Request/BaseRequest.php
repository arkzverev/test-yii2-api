<?php

namespace app\Request;

abstract class BaseRequest
{
    abstract public function validateRequest(): bool;

    public function jsonValidate(string $json): bool
    {
        return json_validate($json);
    }

    public function jsonDecode(string $json): array
    {
        return json_decode($json, true);
    }
}