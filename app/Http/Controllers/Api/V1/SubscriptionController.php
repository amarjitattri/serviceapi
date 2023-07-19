<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class SubscriptionController extends Controller
{
    public function SubscriptionCreated(Request $request){

        $simpref = "SubscriptionCreated";

        // $referance = $request->
        Log::channel('service_api')->info($simpref, [$request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => 'Başarılı',
                    'SmsMessage' => 'ALLPLAY servisi aboneliğiniz başladı
                    " Aboneliğiniz tüm vergiler dahil aylık 89 TLdir.Aylık olarak yenilenecektir.Aboneliğinizi iptal etmek isterseniz IPTAL ALLPLAY yazıp 9093 e gönderebilirsiniz ." +
                "Bilgi:05557383750 ',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionCreatedRequest - ".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, [$response]);
        return $response;
    }
    public function SubscriptionDeactivated(Request $request){

        $simpref = "SubscriptionDeactivated";

        // $referance = $request->
        Log::channel('service_api')->info($simpref, [$request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => 'Başarılı',
                    'SmsMessage' => 'Talebiniz uzere uyeliginiz iptal edilmistir .',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionDeactivated - ".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, [$response]);
        return $response;
    }
    public function SubscriptionRenewFailed(Request $request){

        $simpref = "SubscriptionRenewFailed";
        $referance = "SubscriptionRenewedRequest - ".date("Y-m-d H:i:s");
        // $referance = $request->
        Log::channel('service_api')->info($simpref, [$request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => '',
                    'SmsMessage' => '',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionRenewedRequest - ".date("Y-m-d H:i:s");
        // $referance = $request->
        Log::channel('service_api')->info($referance, [$response]);
        return $response;
    }
    public function SubscriptionRenewed(Request $request){

        $simpref = "SubscriptionRenewed";

        $referance = "SubscriptionRenewedRequest - ".date("Y-m-d H:i:s");
        // $referance = $request->
        Log::channel('service_api')->info($simpref, [$request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => '',
                    'SmsMessage' => '',
                    'SmsHeader' => "9093",
                ]
        ];
        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
    public function SubscriptionResumed(Request $request){

        $simpref = "SubscriptionResumed";
        // $referance = $request->
        Log::channel('service_api')->info($simpref, [$request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => '',
                    'SmsMessage' => '',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionResumedResponse - ".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
    public function SubscriptionToBeDeactivated(Request $request){

        $simpref = "SubscriptionToBeDeactivated";
        // $referance = $request->
        Log::channel('service_api')->info($simpref, [$request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => 'OK',
                ],
                'resultCode' =>[
                    'ResultCode' => 'Talebiniz uzere uyeliginiz iptal edilmistir .',
                    'ResultTxt' => "9093",
                ]
        ];
        $referance = "SubscriptionToBeDeactivatedResponse - ".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
    public function SubscriptionToBeRenewed(Request $request){

        $simpref = "SubscriptionToBeRenewed";
        // $referance = $request->
        Log::channel('service_api')->info($simpref, [$request->all()]);

        $response = [
            'ServiceResult ' => [
                'ResultCode' => "OK",
                'ResultTxt' => '',
                'SmsMessage' => '',
                'SmsHeader' => "9093",
            ]
    ];
        $referance = "SubscriptionToBeRenewedResponse - ".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
    public function SubscriptionTrialToBeEnded(Request $request){

        $simpref = "SubscriptionTrialToBeEnded";
        // $referance = $request->
        Log::channel('service_api')->info($simpref, [$request->all()]);

        $response = [
            'ServiceResult ' => [
                'ResultCode' => "OK",
                'ResultTxt' => 'ALLPLAY servisi aboneliğiniz 3 gün sonra otomatik olarak "
                + "yenilenecektir. ALLPLAY servisi ücreti 89 TL dir ve aylık olarak yenilenir ."
                + "Aboneliğinizi iptal etmek isterseniz IPTAL ALLPLAY yazıp 9093 e gönderebilirsiniz"
                + "Bilgi : 05557383750',
                'SmsMessage' => '',
                'SmsHeader' => "9093",
            ]
    ];
        $referance = "SubscriptionTrialToBeEndedResponse - ".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
}
