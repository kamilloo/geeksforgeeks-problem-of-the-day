<?php

namespace App\Console\Commands;

use App\PascalTriangle\PascalTriangleExecutor;

class PascalTriangleCommand
{
    public function execute():int{

        $executor = new PascalTriangleExecutor();

        $result = $executor->printRow(6);
        print_r("\n".'Pascal Triangle: ' . json_encode($result));
        $result = $executor->printRow(7);
        print_r("\n".'Pascal Triangle: ' . json_encode($result));

        $result = $executor->printRow(8);
        print_r("\n".'Pascal Triangle: ' . json_encode($result));


        return 0;
    }
}