<?php

namespace app\tests\unit;

use PHPUnit\Framework\TestCase;
use App\Service\SumatorService;
use app\Dto\NumbersDto;

class SumatorServiceTest extends TestCase
{
    private $sumatorService;

    public function setUp(): void
    {
        $this->sumatorService = new SumatorService();
    }

    public function testPositiveSumEven()
    {
        $dto = new NumbersDto([1, 2, 3, 4]);
        $result = $this->sumatorService->sumEven($dto);
        $this->assertEquals(6, $result);
    }

    public function testNegativeSumEven()
    {
        $dto = new NumbersDto([1, 2, 3, 4]);
        $result = $this->sumatorService->sumEven($dto);
        $this->assertNotEquals(5, $result);
    }

    public function testEmptyNumbers()
    {
        $dto = new NumbersDto([]);
        $result = $this->sumatorService->sumEven($dto);
        $this->assertEquals(0, $result);
    }
}