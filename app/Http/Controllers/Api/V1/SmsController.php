<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SmsController extends Controller
{
    public function NotifySmsReceptionResponse(Request $request){
        // dump($request->all());
        // $referance = $request->
        Log::channel('service_api')->info('', [$request->all()]);

        $reponse = [
                'NotifySmsDeliveryReportResponse' => [
                    'resultCode' => "OK"
                ]
        ];
        
        return $reponse;
    }
    public function NotifySmsReception(Request $request){
        // dump($request->all());
        // $referance = $request->
        Log::channel('service_api')->info('', [$request->all()]);

        $reponse = [
            'resultCode' => "OK"
        ];

        return $reponse;
    }
}
