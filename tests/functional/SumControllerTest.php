<?php

namespace functional;

use PHPUnit\Framework\TestCase;

class SumControllerTest extends TestCase
{
    public function requestApi($json)
    {
        $ch = curl_init('http://localhost:8000/sum-even');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public function testApiPositiveSumEven()
    {
        $data = json_encode(['numbers' => [1, 2, 3, 4, 5, 6]]);
        $response = $this->requestApi($data);
        $this->assertEquals('{"sum":12}', $response);
    }

    public function testApiNegativeSumEven()
    {
        $data = json_encode(['numbers' => [1, 2, 3, 4, 5, 6]]);
        $response = $this->requestApi($data);
        $this->assertNotEquals('{"sum":10}', $response);
    }
}