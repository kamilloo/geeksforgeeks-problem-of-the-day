<?php

namespace App\SmallestSubstringOfAllCharacters;

class SmallestSubstringOfAllCharacters
{
    private array $characters = [];

    private array $combination = [];

    private array $result = [];

    public function run(array $characters, string $full_string):string
    {
//        $characters = ["x", "y", "z"];
//        $full_string = "xyyzyzux";

        foreach ($characters as $character){
            if (strpos($full_string, $character) === false){
                return '';
            }
        }
        $this->characters = $characters;

        $this->generate_combination(count($this->characters));

        foreach ($this->combination as $combination){
                $letters = [];
                for ($i = 0 ; $i < strlen($combination) ; $i++){

                    $letters[] = $combination[$i];
                }
             //'/z+y+x/';
             $pattern = '/'. implode('+', $letters) . '/';
             $matches = [];
             $found = preg_match($pattern, $full_string, $matches);
             if ($found){
                 $this->result[] = $matches[0];
             }

         }
        $min = $this->result[0];
        for ($i = 0; $i < count($this->result) - 1; $i++){

            if(strlen($this->result[$i + 1]) < strlen($this->result[$i])){
                $min = $this->result[$i + 1];
            }
        }
         return $min;

    }

    public function generate_combination($n, $current ='', $used = [])
    {
        if ($n == 0) {
            $this->combination[] = $current;
        } else {
            foreach ($this->characters as $character){
                if (! in_array($character, $used)){
                    $used[$character] = $character;
                    $this->generate_combination($n -1 ,$current . $character, $used);
                    unset($used[$character]);
                }
            }
        }
    }
}