<?php

namespace App\Http\Controllers;

use App\Services\ProviderService;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function createProvider(Request $request)
    {
        $data = $request->all();
        return ProviderService::createProvider($data);
    }
    public function getProviders()
    {
        return ProviderService::getProviders();
    }
    public function getProvidersForIdUser($user_id)
    {
        return ProviderService::getProvidersForIdUser($user_id);
    }

    public function getProviderForId($id)
    {
        return ProviderService::getProviderForId($id);
    }
    public function deleteProvider($id)
    {
        return ProviderService::deleteProvider($id);
    }
    public function updateProvider(Request $request, $id)
    {
        $data = $request->all();
        return ProviderService::updateProvider($data, $id);
    }
}
