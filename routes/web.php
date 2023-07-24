<?php

use App\Http\Controllers\DocumentationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('documentation.index');
});

Route::get('/subscription', [DocumentationController::class, 'subscription']);
Route::get('/subscriptionCreated', [DocumentationController::class, 'subscriptionCreated']);
Route::get('/subscriptionDeactivated', [DocumentationController::class, 'subscriptionDeactivated']);
Route::get('/subscriptionRenewFailed', [DocumentationController::class, 'subscriptionRenewFailed']);
Route::get('/subscriptionRenewed', [DocumentationController::class, 'subscriptionRenewed']);
Route::get('/subscriptionSuspended', [DocumentationController::class, 'subscriptionSuspended']);
Route::get('/subscriptionToBeDeactivated', [DocumentationController::class, 'subscriptionToBeDeactivated']);
Route::get('/subscriptionToBeRenewed', [DocumentationController::class, 'subscriptionToBeRenewed']);
Route::get('/subscriptionTrialToBeEnded', [DocumentationController::class, 'subscriptionTrialToBeEnded']);
Route::get('/subscriptionResumed', [DocumentationController::class, 'subscriptionResumed']);

Route::get('/sms', [DocumentationController::class, 'sms']);
Route::get('/notifySmsDeliveryReport', [DocumentationController::class, 'notifySmsDeliveryReport']);
Route::get('/notifySmsReception', [DocumentationController::class, 'notifySmsReception']);
