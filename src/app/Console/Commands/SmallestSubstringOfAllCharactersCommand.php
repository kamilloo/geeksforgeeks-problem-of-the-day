<?php

namespace App\Console\Commands;

use App\SmallestSubstringOfAllCharacters\SmallestSubstringOfAllCharacters;

class SmallestSubstringOfAllCharactersCommand
{
    public function execute():void{

        $command = new SmallestSubstringOfAllCharacters();
        $result = $command->run($characters, $full_string);

        print_r("Smallest Substring Of All Characters: {$result}");

        exit(0);
    }
}