<?php

use App\Http\Controllers\Api\V1\SmsController;
use App\Http\Controllers\Api\V1\SubscriptionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function() {
    Route::post('NotifySmsDeliveryReport', [SmsController::class, 'NotifySmsReceptionResponse']);
    Route::post('NotifySmsReception', [SmsController::class, 'NotifySmsReception']);
    Route::post('SubscriptionCreated', [SubscriptionController::class, 'SubscriptionCreated']);
    Route::post('SubscriptionDeactivated', [SubscriptionController::class, 'SubscriptionDeactivated']);
    Route::post('SubscriptionRenewFailed', [SubscriptionController::class, 'SubscriptionRenewFailed']);
    Route::post('SubscriptionRenewed', [SubscriptionController::class, 'SubscriptionRenewed']);
    Route::post('SubscriptionResumed', [SubscriptionController::class, 'SubscriptionResumed']);
    Route::post('SubscriptionSuspended', [SubscriptionController::class, 'SubscriptionSuspended']);
    Route::post('SubscriptionToBeRenewed', [SubscriptionController::class, 'SubscriptionToBeRenewed']);
    Route::post('SubscriptionTrialToBeEnded', [SubscriptionController::class, 'SubscriptionTrialToBeEnded']);
    Route::post('SubscriptionToBeDeactivated', [SubscriptionController::class, 'SubscriptionToBeDeactivated']);
    // Route::apiResource('invoices', InvoiceController::class);
});
// Route::get('NotifySmsReceptionResponse', [SmsController::class, 'NotifySmsReceptionResponse']);
