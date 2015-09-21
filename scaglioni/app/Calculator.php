<?php

namespace Tax;

class Calculator
{

    /**
     * Calculator constructor.
     */
    public function __construct(Tax $tax, Pension $pension)
    {
        $this->pension = $pension;
        $this->tax = $tax;
    }

    /**
     * @param $income
     * @return float
     */
    public function getIncomeTax($income)
    {
        $pension = $this->pension->getPension($income);

        return $this->tax->getTax($income - $pension);
    }

}
