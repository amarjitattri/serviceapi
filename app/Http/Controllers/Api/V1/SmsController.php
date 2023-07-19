<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SmsController extends Controller
{
    public function NotifySmsReceptionResponse(Request $request){
        $referance = $request->SessionId.'_'.date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, [$request->all()]);

        return [
            'resultCode' => "OK"
        ];
    }
    public function NotifySmsReception(Request $request){

        $referance = $request->SessionId.'_'.date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$request->all()]);

        return [
            'resultCode' => "OK"
        ];
    }
}
