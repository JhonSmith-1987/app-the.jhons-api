<?php

namespace App\Http\Controllers;

use App\Services\LoanService;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function createLoan(Request $request)
    {
        $data = $request->all();
        return LoanService::createLoan($data);
    }
    public function getLoans()
    {
        return LoanService::getLoans();
    }
    public function getLoansForUserAndProvider($user_id, $provider_id)
    {
        return LoanService::getLoansForUserAndProvider($user_id, $provider_id);
    }

    public function getLoansForId($id)
    {
        return LoanService::getLoansForId($id);
    }
    public function deleteLoan($id)
    {
        return LoanService::deleteLoan($id);
    }
    public function updateLoan(Request $request, $id)
    {
        $data = $request->all();
        return LoanService::updateLoan($data, $id);
    }
}
