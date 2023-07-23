<?php

namespace App\Http\Controllers;

use App\Services\CreditService;
use Illuminate\Http\Request;

class CreditsController extends Controller
{
    public function createCredit(Request $request)
    {
        $data = $request->all();
        return CreditService::createCredit($data);
    }
    public function getCredits()
    {
        return CreditService::getCredits();
    }
    public function getCreditsForUserAndProvider($user_id, $provider_id)
    {
        return CreditService::getCreditsForUserAndProvider($user_id, $provider_id);
    }

    public function getCreditsForId($id)
    {
        return CreditService::getCreditsForId($id);
    }
    public function deleteCredit($id)
    {
        return CreditService::deleteCredit($id);
    }
    public function updateCredit(Request $request, $id)
    {
        $data = $request->all();
        return CreditService::updateCredit($data, $id);
    }
}
