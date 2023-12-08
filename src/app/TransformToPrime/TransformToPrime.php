<?php
declare(strict_types=1);

namespace App\TransformToPrime;

class TransformToPrime
{
    public function transform(array $arr):int
    {
        //how to check that the number is prime
        //iterate for 2 to  sqrt(i) < number
        $number = array_sum($arr);
        $pad = 0;
        while (1){
            $prime = true;
            for ($i =2;$i<=sqrt($number);$i++){
                if ($number % $i == 0){
                    $prime = false;
                    break;
                }
            }
            if ($prime){
                return $pad;
            }
            do{
                ++$pad;
                ++$number;
            }while(in_array($pad, $arr));
        }
        return $pad;
    }
}