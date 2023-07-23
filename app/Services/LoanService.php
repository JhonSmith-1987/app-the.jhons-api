<?php

namespace App\Services;

use App\Repositories\LoanRepository;

class LoanService
{

    public static function createLoan(array $data)
    {
        LoanRepository::createLoan($data);
        return json_encode(['message' => 'Prestamo creado con exito']);
    }

    public static function getLoans()
    {
        return LoanRepository::getLoans();
    }

    public static function getLoansForUserAndProvider($user_id, $provider_id)
    {
        $loan = self::getLoans()->where('user_id', $user_id)
                                ->where('provider_id', $provider_id);
        $sum_value_loan = $loan->sum('value_loan');
        $percentage = $loan->latest('created_at')->value('percentage');
        $sum_total_loan = $loan->sum('total_loan');
        $total_loan = $loan->latest('created_at')->value('total_loan');
        $payment = $loan->latest('created_at')->value('payment');

        return response()->json([
            'sum_value_loan'=>$sum_value_loan,
            'percentage'=>$percentage,
            'sum_total_loan'=>$sum_total_loan,
            'total_loan'=>$total_loan,
            'payment'=>$payment,
            'data'=>$loan,
        ]);
    }

    public static function getLoansForId($id)
    {
        return LoanRepository::getLoansForId($id);
    }

    public static function deleteLoan($id)
    {
        LoanRepository::deleteLoan($id);
        return json_encode(['message'=>'Cuota eliminada con exito']);
    }

    public static function updateLoan(array $data, $id)
    {
        LoanRepository::updateLoan($data, $id);
        return json_encode(['message'=>'Dato actualizado']);
    }
}
