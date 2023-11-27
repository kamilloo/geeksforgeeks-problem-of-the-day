<?php
declare(strict_types=1);

namespace App\Console\Commands;

class HeightBinaryCommand
{
    public function execute():void{
        $height_binary = new HeightBinaryCalculator();

        $height = $height_binary->calculate();

        print_r("\nHeight: {$height}\n");
    }
}