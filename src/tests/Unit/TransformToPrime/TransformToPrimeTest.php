<?php
declare(strict_types=1);

namespace Tests\Unit\TransformToPrime;

use App\TransformToPrime\TransformToPrime;
use PHPUnit\Framework\TestCase;

class TransformToPrimeTest extends TestCase
{
    /**
     * @test
     * @dataProvider transformToPrimeProvider
     */
    public function transformToPrime($sample_table, $expected_pad){
        $transform_to_prime = new TransformToPrime();

        $pad = $transform_to_prime->transform($sample_table);

        $this->assertSame($expected_pad, $pad);
    }

    public function transformToPrimeProvider()
    {
        return [
            'example-1' => [
                'sample_table' => [2, 4, 6, 8, 12],
                'pad' => 5,
            ],
            'example-2' => [
                'sample_table' => [1, 5, 7],
                'pad' => 0,
            ],
            'example-3' => [
                'sample_table' => [1, 5, 6, 100],
                'pad' => 15,
            ],
        ];
    }
}