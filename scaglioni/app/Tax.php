<?php

namespace Tax;

class Tax
{
    /**
     * @param  $income
     * @return
     */
    public function getTax($income)
    {
        return $this->doCalculation($income);
    }

    /**
     * @param $income
     * @return mixed
     */
    public function doCalculation($income)
    {
        if ($income > 75000) {
            return round(($income - 75000) * 0.43 + 25420,2);
        } elseif ($income > 55000) {
            return round(($income - 55000) * 0.41 + 17220,2);
        } elseif ($income > 28000) {
            return round(($income - 28000) * 0.38 + 6960,2);
        } elseif ($income > 15000) {
            return round(($income - 15000) * 0.27 + 3450,2);
        } else {
            return round($income * 0.23,2);
        }
    }

}
