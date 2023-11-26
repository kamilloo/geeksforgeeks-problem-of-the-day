<?php

namespace App\PascalTriangle;

class PascalTriangleExecutor
{
    public function printRow(int $number):array{

        $line  = $new_line = [1];

        for ($next = 0; $next < $number; $next++){
            $new_line = [1];
            for ($j =0; $j < count($line) -1 ; $j++){
                $new_line[] = $line[$j] + $line[$j+1];
            }
            $new_line[] = 1;
            $line = $new_line;

        }

        return $new_line;
    }

}