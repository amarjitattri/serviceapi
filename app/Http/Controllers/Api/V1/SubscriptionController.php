<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class SubscriptionController extends Controller
{
    const SUBSCRIPTION_CREATED = 'SubscriptionCreatedRequest';
    const SUBSCRIPTION_DEACTIVATED = 'SubscriptionDeactivatedRequest';
    const SUBSCRIPTION_RENEW_FAILED = 'SubscriptionRenewFailedRequest';
    const SUBSCRIPTION_RENEWED = 'SubscriptionRenewedRequest';
    const SUBSCRIPTION_RESUMED = 'SubscriptionResumedRequest';
    const SUBSCRIPTION_SUSPENDED = 'SubscriptionSuspendedRequest';
    const SUBSCRIPTION_TO_BE_DEACTIVATED = 'SubscriptionToBeDeactivatedRequest';
    const SUBSCRIPTION_TO_BE_RENEWED = 'SubscriptionToBeRenewedRequest';
    const SUBSCRIPTION_TRIAL_TO_BE_ENDED = 'SubscriptionTrialToBeEndedRequest';


    public function subcriptionRequest(Request $request)
    {
        try {
            // Get the subscription request type from the request
            $subscriptionType = $request->input('RequestType');

            if ($subscriptionType) {
                switch ($subscriptionType) {
                    // Handle the Subscription Created request
                    case self::SUBSCRIPTION_CREATED:
                        return $this->SubscriptionCreated($request);

                    // Handle the Subscription Deactivated request
                    case self::SUBSCRIPTION_DEACTIVATED:
                        return $this->SubscriptionDeactivated($request);

                    // Handle the Subscription Renewal Failed request
                    case self::SUBSCRIPTION_RENEW_FAILED:
                        return $this->SubscriptionRenewFailed($request);

                    // Handle the Subscription Renewed request
                    case self::SUBSCRIPTION_RENEWED:
                        return $this->SubscriptionRenewed($request);

                    // Handle the Subscription Resumed request
                    case self::SUBSCRIPTION_RESUMED:
                        return $this->SubscriptionResumed($request);

                    // Handle the Subscription Suspended request
                    case self::SUBSCRIPTION_SUSPENDED:
                        return $this->SubscriptionSuspended($request);

                    // Handle the Subscription To Be Deactivated request
                    case self::SUBSCRIPTION_TO_BE_DEACTIVATED:
                        return $this->SubscriptionToBeDeactivated($request);

                    // Handle the Subscription To Be Renewed request
                    case self::SUBSCRIPTION_TO_BE_RENEWED:
                        return $this->SubscriptionToBeRenewed($request);

                    // Handle the Subscription Trial To Be Ended request
                    case self::SUBSCRIPTION_TRIAL_TO_BE_ENDED:
                        return $this->SubscriptionTrialToBeEnded($request);

                    // Handle unsupported request types
                    default:
                        return response()->json([
                            'error' => 'Unsupported subscription request type'
                        ], 400);
                }
            }
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Subscription request error: ' . $e->getMessage());

            // Return an error response for exceptional cases
            return response()->json([
                'error' => 'An error occurred while processing the subscription request'
            ], 500);
        }
    }

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
