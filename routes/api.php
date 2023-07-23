<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreditsController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\PermissionsUserController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth
Route::post('/login', [AuthController::class, 'login']);
Route::get('/infoUser', [AuthController::class, 'infoUser'])->middleware('auth:sanctum');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// routes User
Route::post('/createUser', [UsersController::class, 'createUser']);
Route::get('/getUsers', [UsersController::class, 'getUsers']);
Route::get('/getUsersForId/{id}', [UsersController::class, 'getUsersForId']);
Route::delete('deleteUser/{id}', [UsersController::class, 'deleteUser']);
Route::put('/updateUser/{id}', [UsersController::class, 'updateUser']);

// routes Providers
Route::post('/createProvider', [ProvidersController::class, 'createProvider']);
Route::get('/getProviders', [ProvidersController::class, 'getProviders']);
Route::get('/getProvidersForIdUser/{user_id}', [ProvidersController::class, 'getProvidersForIdUser']);
Route::get('/getProviderForId/{id}', [ProvidersController::class, 'getProviderForId']);
Route::delete('/deleteProvider/{id}', [ProvidersController::class, 'deleteProvider']);
Route::put('/updateProvider/{id}', [ProvidersController::class, 'updateProvider']);

// routes Credits
Route::post('/createCredit', [CreditsController::class, 'createCredit']);
Route::get('/getCredits', [CreditsController::class, 'getCredits']);
Route::get('/getCreditsForUserAndProvider/{user_id}/{provider_id}', [CreditsController::class, 'getCreditsForUserAndProvider']);
Route::get('/getCreditsForId/{id}', [CreditsController::class, 'getCreditsForId']);
Route::delete('/deleteCredit/{id}', [CreditsController::class, 'deleteCredit']);
Route::put('/updateCredit/{id}', [CreditsController::class, 'updateCredit']);

// routes Loans
Route::post('/createLoan', [LoansController::class, 'createLoan']);
Route::get('/getLoans', [LoansController::class, 'getLoans']);
Route::get('/getLoansForUserAndProvider/{user_id}/{provider_id}', [LoansController::class, 'getLoansForUserAndProvider']);
Route::get('/getLoansForId/{id}', [LoansController::class, 'getLoansForId']);
Route::delete('/deleteLoan/{id}', [LoansController::class, 'deleteLoan']);
Route::put('/updateLoan/{id}', [LoansController::class, 'updateLoan']);

// permissions
Route::post('/createPermission', [PermissionsController::class, 'createPermission']);
Route::get('/getPermissions', [PermissionsController::class, 'getPermissions']);
Route::delete('/deletePermission/{id}', [PermissionsController::class, 'deletePermission']);
Route::put('/updatePermission/{id}', [PermissionsController::class, 'updatePermission']);

// permissions users
Route::post('/createPermissionUser', [PermissionsUserController::class, 'createPermissionUser']);
Route::get('/getPermissionUsers', [PermissionsUserController::class, 'getPermissionUsers']);
Route::get('/getPermissionUsersForIdUser/{id_user}', [PermissionsUserController::class, 'getPermissionUsersForIdUser']);
Route::delete('/deletePermissionUser/{id}', [PermissionsUserController::class, 'deletePermissionUser']);
Route::put('/updatePermissionUser/{id}', [PermissionsUserController::class, 'updatePermissionUser']);
