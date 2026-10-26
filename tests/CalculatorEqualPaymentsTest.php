<?php

namespace Nyholm\EffectiveInterest\Test;

use Nyholm\EffectiveInterest\Calculator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CalculatorEqualPaymentsTest extends TestCase
{
    #[DataProvider('generator')]
    public function testWithEqualPayments(
        float $correctValue,
        int $principal,
        int $payment,
        int $numberOfMonths,
        float $guess
    ): void {
        $calculator = new Calculator();
        $interest = $calculator->withEqualPayments($principal, $payment, $numberOfMonths, $guess);
        $this->assertEqualsWithDelta(
            $correctValue,
            $interest,
            0.0001,
            'Failed to calculate effective interest with specified payments.'
        );
    }

    public static function generator(): array
    {
        return [
            [0.1128, 11200, 291, 48, 0.02],
            [0.0712, 100000, 2400, 48, 0.03],
        ];
    }
}
