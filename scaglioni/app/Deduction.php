<?php

namespace Tax;

class Deduction
{

    const THRESHOLD = 55000;

    public function getStandardDeduction($amount)
    {
        if ($amount>self::THRESHOLD) {
            return 0;
        } else {
           return round(((self::THRESHOLD - $amount) / 50200) * 1104,2);
        }
    }

}
