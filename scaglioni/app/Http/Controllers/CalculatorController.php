<?php

namespace Tax\Http\Controllers;

use Illuminate\Http\Request;
use Tax\Calculator;
use Tax\Deduction;
use Tax\Tax;
use Tax\Pension;

use Tax\Http\Requests;
use Tax\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $amount
     * @return \Illuminate\Http\Response
     */
    public function show($amount, Tax $tax, Calculator $calculator, Pension $pension, Deduction $deduction)
    {
        $standardDeduction = $deduction->getStandardDeduction($amount);
        $pensionAmount = $pension->getPension($amount);
        $incomeTaxAmount = $calculator->getIncomeTax($amount - $pensionAmount - $standardDeduction);
        $netIncome = $amount - $incomeTaxAmount - $pensionAmount;
        return ['income'=>$amount,'tax'=>$incomeTaxAmount,'pension'=>$pensionAmount,'standard_deduction'=>$standardDeduction,'net_income'=>$netIncome];

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy($id)
    {
        //
    }
}
