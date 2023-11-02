<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Artisaninweb\SoapWrapper\SoapWrapper;


class SmsController extends Controller
{
     protected $soapWrapper;

     public function __construct(SoapWrapper $soapWrapper){

        $this->soapWrapper = $soapWrapper;
    }

    public function NotifySmsReceptionResponse(Request $request){
        $referance = $request->SessionId.'_'.date("Y-m-d H:i:s");
        Log::channel('service_api')->info($referance, [$request->all()]);
        $this->SendSms();

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
    public function SendSms(){
        try{
            $soapclient = new  \SoapClient("https://pims.turktelekom.com.tr/ws/Pims.wsdl", [
    "encoding"=>"ISO-8859-1",
    "exceptions" => true ]);
                $params = [
                    'PimsApiUserInformation' => [
                           'PimsApiPassword' => 'MTQ3MTAwNzcwNzQ1NlNBUEFBSEFCR',
                           'PimsApiUsername' => 'MTQ3MTAwNzcwNzQ0MFNBUEFBSEFCR'
                    ],
                    'SmsType' => 'SMS',
                    'ReceiverAddress' => '905059503834',
                    'SmsHeader' => '9093',
                    'SessionId' => '6857011847,1,1,1',
                    'Message' => 'asfdsadf',
                    'Charging' => [
                        'ServiceKey' => 'SRVSMSMT9093APPGALLERY1',
                        'AccessChannel' => '03',
                        'ChargingAddress' => [
                                'Address' => [
                                    'MSISDN' => '905059503834'
                                ]
                            
                        ],

                        
                    ],
                ];

               
                $response = $soapclient->SendSms($params);
               
                
                //echo '<br><br><br>';
                //$array = json_decode(json_encode($response), true);
                //print_r($array);
                die;
            }catch(Exception $e){
                //print_r($e);
               
	            echo $e->getMessage();
            }
    }
}
