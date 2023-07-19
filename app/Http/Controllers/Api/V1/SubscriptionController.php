<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class SubscriptionController extends Controller
{
    public function SubscriptionCreated(Request $request){

        $simpref = "SubscriptionCreated";

        $referance = "SubscriptionCreatedRequest_".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => 'Başarılı',
                    'SmsMessage' => 'ALLPLAY servisi aboneliğiniz başladı Aboneliğiniz tüm vergiler dahil aylık TLdir.Aylık olarak yenilenecektir.Aboneliğinizi iptal etmek isterseniz IPTAL ALLPLAY yazıp 9093 e gönderebilirsiniz Bilgi:05557383750 ',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionCreated ".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);
        return $response;
    }
    public function SubscriptionDeactivated(Request $request){

        $simpref = "SubscriptionDeactivated";

        $referance = "SubscriptionDeactivatedRequest_".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => 'Başarılı',
                    'SmsMessage' => 'Talebiniz uzere uyeliginiz iptal edilmistir .',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionDeactivated_".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, [$response]);
        return $response;
    }
    public function SubscriptionRenewFailed(Request $request){

        $simpref = "SubscriptionRenewFailed";
        $referance = "SubscriptionRenewedRequest ".$request->Subscription['LastRenewalDate'].date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => '',
                    'SmsMessage' => '',
                    'SmsHeader' => "9093",
                ]
        ];

        $referance = "SubscriptionRenewFailedResponse_".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, [$response]);
        return $response;
    }
    public function SubscriptionRenewed(Request $request){

        $simpref = "SubscriptionRenewed";

        $referance = "SubscriptionRenewedRequest_".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => '',
                    'SmsMessage' => '',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionRenewedResponse_".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
    public function SubscriptionResumed(Request $request){

        $simpref = "SubscriptionResumed";
        $referance = "SubscriptionResumedRequest_".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => '',
                    'SmsMessage' => '',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionResumedResponse_".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
    public function SubscriptionSuspended(Request $request){

        $simpref = "SubscriptionSuspended";
        $referance = "SubscriptionSuspendedRequest_".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

        $response = [
                'ServiceResult ' => [
                    'ResultCode' => "OK",
                    'ResultTxt' => '',
                    'SmsMessage' => 'Talebiniz uzere uyeliginiz iptal edilmistir .',
                    'SmsHeader' => "9093",
                ]
        ];
        $referance = "SubscriptionSuspendedResponse_".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
    public function SubscriptionToBeDeactivated(Request $request){

        $simpref = "SubscriptionToBeDeactivated";
        $referance = "SubscriptionToBeDeactivatedRequest_".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

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
        $referance = "SubscriptionToBeRenewedRequest_".date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

        $response = [
            'ServiceResult ' => [
                'ResultCode' => "OK",
                'ResultTxt' => '',
                'SmsMessage' => '',
                'SmsHeader' => "9093",
            ]
    ];
        $referance = "SubscriptionToBeRenewedResponse_".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
    public function SubscriptionTrialToBeEnded(Request $request){

        $simpref = "SubscriptionTrialToBeEnded";
        $referance = "SubscriptionTrialToBeEnded_".$request->Subscription['LastRenewalDate'].date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, ['simpref' => $simpref , 'request' => $request->all()]);

        $response = [
            'ServiceResult ' => [
                'ResultCode' => "OK",
                'ResultTxt' => 'ALLPLAY servisi aboneliğiniz 3 gün sonra otomatik olarak yenilenecektir. ALLPLAY servisi ücreti 89 TL dir ve aylık olarak yenilenir Aboneliğinizi iptal etmek isterseniz IPTAL ALLPLAY yazıp 9093 e gönderebilirsiniz Bilgi : 05557383750',
                'SmsMessage' => '',
                'SmsHeader' => "9093",
            ]
    ];
        $referance = "SubscriptionTrialToBeEndedResponse_".date("Y-m-d H:i:s");

        Log::channel('service_api')->info($referance, [$response]);

        return $response;
    }
}
