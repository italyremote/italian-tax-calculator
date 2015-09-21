<?php

namespace Tax;

class Pension
{

    /**
     * @param float $income
     * @return float
     */
    public function getPension($income)
    {
        return 0.277 * $income;
    }
}
