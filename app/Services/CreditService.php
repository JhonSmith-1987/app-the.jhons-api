<?php

namespace App\Services;

use App\Repositories\CreditRepository;

class CreditService
{

    public static function createCredit(array $data)
    {
        CreditRepository::createCredit($data);
        return json_encode(['message' => 'Credito creado con exito']);
    }

    public static function getCredits()
    {
        return CreditRepository::getCredits();
    }

    public static function getCreditsForUserAndProvider($user_id, $provider_id)
    {
        $credits = self::getCredits()->where('user_id', $user_id)->where('provider_id', $provider_id);
        $sumValue = $credits->sum('value');
        return response()->json([
            'sum-value' => $sumValue,
            'data' => $credits,
        ]);
    }

    public static function getCreditsForId($id)
    {
        return CreditRepository::getCreditsForId($id);
    }

    public static function deleteCredit($id)
    {
        CreditRepository::deleteCredit($id);
        return json_encode(['message' => 'Credito eliminado con exito']);
    }

    public static function updateCredit(array $data, $id)
    {
        CreditRepository::updateCredit($data, $id);
        return json_encode(['message'=>'Dato actualizad']);
    }
}
