<?php

namespace App\Services;

use App\Repositories\ProviderRepository;

class ProviderService
{

    public static function createProvider(array $data)
    {
        ProviderRepository::createProvider($data);
        return json_encode(['message'=>'Proveedor creado con exito']);
    }

    public static function getProviders()
    {
        return ProviderRepository::getProviders();
    }

    public static function getProvidersForIdUser($user_id)
    {
        $providers = self::getProviders()->where('user_id', $user_id);
        return $providers;
    }

    public static function getProviderForId($id)
    {
        return ProviderRepository::getProviderForId($id);
    }

    public static function deleteProvider($id)
    {
        ProviderRepository::deleteProvider($id);
        return json_encode(['message'=>'Proveedor eliminado con exito']);
    }

    public static function updateProvider(array $data, $id)
    {
        ProviderRepository::updateProvider($data, $id);
        return json_encode(['message'=>'proveedor actualizado correctamente']);
    }
}
