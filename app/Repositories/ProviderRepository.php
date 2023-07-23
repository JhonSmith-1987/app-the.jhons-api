<?php

namespace App\Repositories;

use App\Models\Credits;
use App\Models\Loans;
use App\Models\Providers;

class ProviderRepository
{

    public static function createProvider(array $data)
    {
        $provider = new Providers();
        $provider->name = $data['name'];
        $provider->phone = $data['phone'];
        $provider->address = $data['address'];
        $provider->user_id = $data['user_id'];
        $provider->save();
    }

    public static function getProviders()
    {
        return Providers::all();
    }

    public static function getProviderForId($id)
    {
        return Providers::find($id);
    }

    public static function deleteProvider($id)
    {
        Loans::where('provider_id', $id)->delete();
        Credits::where('provider_id', $id)->delete();
        return Providers::destroy($id);
    }

    public static function updateProvider(array $data, $id)
    {
        $name = $data['name'];
        $phone = $data['phone'];
        $address = $data['address'];
        Providers::where('id', $id)->update([
            'name'=>$name,
            'phone'=>$phone,
            'address'=>$address,
        ]);
    }
}
