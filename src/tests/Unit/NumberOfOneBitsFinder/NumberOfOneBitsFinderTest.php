<?php
declare(strict_types=1);

namespace Tests\Unit\NumberOfOneBitsFinder;

use App\Console\Commands\NumberOfOneBitsCommand;
use App\NumberOfOneBits\NumberOfOneBitsFinder;
use PHPUnit\Framework\TestCase;

class NumberOfOneBitsFinderTest extends TestCase
{
    /**
     *  @data-provider
     */
    public function test_find_number_of_one_bits(int $bits_string, int $one_count){

        $number_of_the_bits = new NumberOfOneBitsFinder();
        $number_of_the_bits->search($bits_string);

        $this->

    }
}