<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SmsController extends Controller
{

    protected $soapWrapper;
    const NOTIFY_SMS_DELIVERY_REPORT = 'NotifySmsDeliveryReportRequest';
    const NOTIFY_SMS_RECEPTION = 'NotifySmsReceptionRequest';

    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
    }

    public function sms(Request $request){
        try{
            $notificationType = $request->input('RequestType');
            if ($notificationType) {
                switch ($notificationType) {
                // Handle the Subscription Created request
                    case self::NOTIFY_SMS_DELIVERY_REPORT:
                        return $this->NotifySmsReceptionResponse($request);
                    case self::NOTIFY_SMS_RECEPTION:
                        return $this->NotifySmsReception($request);
                }
            }
        }catch(Exception $e){
            return response()->json([
                "error"=> $e->getMessage(),
                ],0);
            }
    }
    public function NotifySmsReceptionResponse(Request $request){

        $referance = $request->SessionId.'_'.date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, [$request->all()]);

        return [
            "NotifySmsDeliveryReportResponse" =>[
                'resultCode' => "OK"
            ]
        ];
    }
    public function NotifySmsReception(Request $request){

        $referance = $request->SessionId.'_'.date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$request->all()]);

        return [
            "NotifySmsReceptionResponse" =>[
                'resultCode' => "OK"
            ]
        ];
    }

}
