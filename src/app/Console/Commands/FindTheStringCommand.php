<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\FindTheString\StringFinder;

class FindTheStringCommand
{
    public function execute():void{
        $find_the_string = new StringFinder();

        $substring_number = 2;
        $characters_limit = 2;
        $string = $find_the_string->search($substring_number, $characters_limit);

        print_r("\nFound string: {$string}\n");
    }
}