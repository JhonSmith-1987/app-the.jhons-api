<?php

namespace App\Repositories;

use App\Models\Credits;

class CreditRepository
{

    public static function createCredit(array $data)
    {
        $credit = new Credits();
        $credit->date = $data['date'];
        $credit->detail = $data['detail'];
        $credit->value = $data['value'];
        $credit->provider_id = $data['provider_id'];
        $credit->user_id = $data['user_id'];
        $credit->save();
    }

    public static function getCredits()
    {
        return Credits::all();
    }

    public static function getCreditsForId($id)
    {
        return Credits::find($id);
    }

    public static function deleteCredit($id)
    {
        return Credits::destroy($id);
    }

    public static function updateCredit(array $data, $id)
    {
        $detail = $data['detail'];
        $value = $data['value'];
        Credits::where('id', $id)->update([
            'detail'=>$detail,
            'value'=>$value,
        ]);
    }
}
