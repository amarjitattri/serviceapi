<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    const REQUEST_URL = 'http:/127.0.0.1/api/v1';
    public function subscription(){

        return view('documentation.subscription.index', ['header_name' => 'Subscription', 'header_url' => '/']);
    }
    public function subscriptionCreated(){

        return view('documentation.subscription.subscriptionCreated', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }
    public function subscriptionDeactivated(){

        return view('documentation.subscription.subscriptionDeactivated', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }
    public function subscriptionRenewFailed(){
        return view('documentation.subscription.subscriptionRenewFailed', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }
    public function subscriptionRenewed(){
        return view('documentation.subscription.subscriptionRenewed', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }

    public function subscriptionSuspended(){
        return view('documentation.subscription.subscriptionSuspended', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }
    public function subscriptionToBeDeactivated(){
        return view('documentation.subscription.subscriptionToBeDeactivated', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }
    public function subscriptionToBeRenewed(){
        return view('documentation.subscription.subscriptionToBeRenewed', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }
    public function subscriptionTrialToBeEnded(){
        return view('documentation.subscription.subscriptionTrialToBeEnded', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }
    public function subscriptionResumed(){
        return view('documentation.subscription.subscriptionResumed', ['header_name' => 'Subscription', 'header_url' => '/subscription', 'request_url' => self::REQUEST_URL]);
    }
    public function sms(){
        return view('documentation.sms.index', ['header_name' => 'Sms', 'header_url' => '/', 'request_url' => self::REQUEST_URL]);
    }
    public function notifySmsDeliveryReport(){
        return view('documentation.sms.notifySmsDeliveryReport', ['header_name' => 'Sms', 'header_url' => '/sms', 'request_url' => self::REQUEST_URL]);
    }
    public function notifySmsReception(){
        return view('documentation.sms.notifySmsReception', ['header_name' => 'Sms', 'header_url' => '/sms', 'request_url' => self::REQUEST_URL]);
    }
}
