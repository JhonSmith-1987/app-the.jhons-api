<?php

namespace App\Repositories;

use App\Models\Loans;

class LoanRepository
{

    public static function createLoan(array $data)
    {
        $loan = new Loans();
        $loan->date = $data['date'];
        $loan->detail = $data['detail'];
        $loan->value_loan = $data['value_loan'];
        $loan->percentage = $data['percentage'];
        $loan->total_loan = $data['total_loan'];
        $loan->payment = $data['payment'];
        $loan->provider_id = $data['provider_id'];
        $loan->user_id = $data['user_id'];
        $loan->save();
    }

    public static function getLoans()
    {
        return Loans::all();
    }

    public static function deleteLoan($id)
    {
        return Loans::destroy($id);
    }

    public static function updateLoan(array $data, $id)
    {
        $date = $data['date'];
        $detail = $data['detail'];
        $value_loan = $data['value_loan'];
        $percentage = $data['percentage'];
        $total_loan = $data['total_loan'];
        $payment = $data['payment'];
        Loans::where('id', $id)->update([
            'date'=>$date,
            'detail'=>$detail,
            'value_loan'=>$value_loan,
            'percentage'=>$percentage,
            'total_loan'=>$total_loan,
            'payment'=>$payment,
        ]);
    }

    public static function getLoansForId($id)
    {
        return Loans::find($id);
    }
}
