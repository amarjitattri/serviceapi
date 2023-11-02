<?php

use App\Http\Controllers\DocumentationController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

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
Route::any('/testo2', function () {
  

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://pims.turktelekom.com.tr/ws/Pims.wsdl',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:sch="http://www.avea.com.tr/pims/schema">
   <soapenv:Header/>
   <soapenv:Body>
      <sch:SendSmsRequest>
         <PimsApiUserInformation>
            <PimsApiUsername>MTQ3MTAwNzcwNzQ0MFNBUEFBSEFCR</PimsApiUsername>
            <PimsApiPassword>MTQ3MTAwNzcwNzQ1NlNBUEFBSEFCR</PimsApiPassword>
         </PimsApiUserInformation>
         <!--Optional:-->
         <SmsType>SMS</SmsType>
         <ReceiverAddress> 
            <Msisdn>905059503834</Msisdn> 
         </ReceiverAddress>
         <SmsHeader>9093</SmsHeader>
         <Message>Sedat deneme</Message>
         <sch:Charging>
            <ServiceKey>SRVSMSMT9093APPGALLERY1</ServiceKey>
            <!--Optional:-->
            <ItemInfo></ItemInfo>
            <!--Optional:-->
            <ItemCategory></ItemCategory>
            <!--Optional:-->
            <ContentProvider></ContentProvider>
            <AccessChannel>03</AccessChannel>
            <ChargingAddress>
               <!--Optional:-->
               <Msisdn>905059503834</Msisdn>
               <!--Optional:-->
            </ChargingAddress>
         </sch:Charging>
         <!--Zero or more repetitions:-->
    
         <!--Optional:-->
         <PartnerReference>?</PartnerReference>
      </sch:SendSmsRequest>
   </soapenv:Body>
</soapenv:Envelope>',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;



exit();

           // Kök öğe oluştur
        $envelope = new SimpleXMLElement('<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:sch="http://www.avea.com.tr/pims/schema"></soapenv:Envelope>');

        // Header oluştur
        $header = $envelope->addChild('soapenv:Header');

        // Body oluştur
        $body = $envelope->addChild('soapenv:Body');

        // SendSmsRequest oluştur
        $sendSmsRequest = $body->addChild('sch:SendSmsRequest');

        // PimsApiUserInformation oluştur
        $pimsApiUserInformation = $sendSmsRequest->addChild('PimsApiUserInformation');
        $pimsApiUserInformation->addChild('PimsApiUsername', 'MTQ3MTAwNzcwNzQ0MFNBUEFBSEFCR');
        $pimsApiUserInformation->addChild('PimsApiPassword', 'MTQ3MTAwNzcwNzQ1NlNBUEFBSEFCR');

        // SmsType oluştur (isteğe bağlı)
        $sendSmsRequest->addChild('SmsType', 'SMS');

        // ReceiverAddress oluştur
        $receiverAddress = $sendSmsRequest->addChild('ReceiverAddress');
        $receiverAddress->addChild('Msisdn', '905059503834');

        // SmsHeader oluştur
        $sendSmsRequest->addChild('SmsHeader', '9093');

        // Message oluştur
        $sendSmsRequest->addChild('Message', 'Sedat deneme');

        // Charging oluştur
        $charging = $sendSmsRequest->addChild('sch:Charging');
        $charging->addChild('ServiceKey', 'SRVSMSMT9093APPGALLERY1');

        // AccessChannel oluştur
        $charging->addChild('AccessChannel', '03');

        // ChargingAddress oluştur (isteğe bağlı)
        $chargingAddress = $charging->addChild('ChargingAddress');
        $chargingAddress->addChild('Msisdn', '905059503834');

        // PartnerReference oluştur (isteğe bağlı)
        $sendSmsRequest->addChild('PartnerReference', '?');

        // XML'i formatlı bir şekilde yazdır
        $dom = dom_import_simplexml($envelope)->ownerDocument;
        $dom->formatOutput = true;
        echo $dom->saveXML();
           

    $xmlData = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:sch="http://www.avea.com.tr/pims/schema">
   <soapenv:Header/>
   <soapenv:Body>
      <sch:SendSmsRequest>
         <PimsApiUserInformation>
            <PimsApiUsername>MTQ3MTAwNzcwNzQ0MFNBUEFBSEFCR</PimsApiUsername>
            <PimsApiPassword>MTQ3MTAwNzcwNzQ1NlNBUEFBSEFCR</PimsApiPassword>
         </PimsApiUserInformation>
         <!--Optional:-->
         <SmsType>SMS</SmsType>
         <ReceiverAddress> 
            <Msisdn>905059503834</Msisdn> 
         </ReceiverAddress>
         <SmsHeader>9093</SmsHeader>
         <Message>Sedat deneme</Message>
         <sch:Charging>
            <ServiceKey>SRVSMSMT9093APPGALLERY1</ServiceKey>
            <!--Optional:-->
            <ItemInfo></ItemInfo>
            <!--Optional:-->
            <ItemCategory></ItemCategory>
            <!--Optional:-->
            <ContentProvider></ContentProvider>
            <AccessChannel>03</AccessChannel>
            <ChargingAddress>
               <!--Optional:-->
               <Msisdn>905059503834</Msisdn>
               <!--Optional:-->
            </ChargingAddress>
         </sch:Charging>
         <!--Zero or more repetitions:-->
    
         <!--Optional:-->
         <PartnerReference>?</PartnerReference>
      </sch:SendSmsRequest>
   </soapenv:Body>
</soapenv:Envelope>';
    

$response = Http::withHeaders([
    'Content-Type' => 'text/xml',
    'Host' => '',
    'Content-Length' => '<calculated when request is sent>',
])
->post('https://pims.turktelekom.com.tr/ws/Pims.wsdl', '');

// İstek sonucunu görüntüle
echo $response->body();






});
Route::any('/testo', function () {


// wsdl cache 'ini devre disi birak
ini_set("soap.wsdl_cache_enabled", "0");

try {

 




$url = "https://pims.turktelekom.com.tr/ws/Pims.wsdl";

    
//Use the functions of the client, the params of the function are in
//the associative array
$params = [
                    'PimsApiUserInformation' =>
                            [
                                     'PimsApiUsername' => 'MTQ3MTAwNzcwNzQ0MFNBUEFBSEFCR',
                                     'PimsApiPassword' => 'MTQ3MTAwNzcwNzQ1NlNBUEFBSEFCR',
                             ],
                        'PartnerReference' => '1',
                        'SmsType' => 'SMS',
                        'ReceiverAddress' => '905059503834',
                        'SmsHeader' => '9093',
                        'SessionId' => '6857011847,1,1,1',
                        'Message' => 'mesajasdasdasda',
                        'Charging' => [
                            'ServiceKey' => 'SRVSMSMT9093APPGALLERY1',
                            'AccessChannel' => '03',
                            'ChargingAddress' =>       [
                                   'Msisdn' => '905059503834'
                                                       ],
                        ],

                    ];

                
                $soapclient = new \SoapClient($url, ["encoding"=>"ISO-8859-1","exceptions" => true ]);
               
                $getf = $soapclient->__getfunctions();
                echo "<pre>";
                print_r($getf);
                echo "</pre>";


                $response = $soapclient->SendSms($params);
                 
                var_dump($response);

             


                exit("bitti");

var_dump($response);

/*
var_dump($response);

    // SOAPClient nesnesi olustur
    $client = new SoapClient("https://pims.turktelekom.com.tr/ws/Pims.wsdl",$options);

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
                       'ItemCategory'=>'',
                       'ItemInfo'=>'',
                        'ServiceKey' => 'SRVSMSMT9093APPGALLERY1',
                        'AccessChannel' => '03',
                        'ChargingAddress' => [
                               'Asid'=>'',
                                    'MSISDN' => '905059503834'
                        ],

                        
                    ],
                ];
               // dd($params);
               // $response = $client->__soapCall("SendSms", array($params));

    $response = $client->SendSms($params);
 */

    if(isset($_GET['request'])){
        header("Content-type: text/xml");
        die($client->__getLastRequest());
    } else if(isset($_GET['response'])){
        header("Content-type: text/xml");
        die($client->__getLastResponse());
    }
   
    echo "Metod basarili bir sekilde calistirildi.<br/>Sonuc asagidadir.<br/>";
    echo  "<pre>";
    // Sonucu ekrana bas
    var_dump($response);
    echo  "</pre>";


  


} catch (Exception $exc) { // Hata olusursa yakala
    echo "Soap service message: " . $exc->getMessage();
}

});



Route::any('/subscription', [DocumentationController::class, 'subscription']);
Route::get('/subscriptionCreated', [DocumentationController::class, 'subscriptionCreated']);
Route::get('/subscriptionDeactivated', [DocumentationController::class, 'subscriptionDeactivated']);
Route::get('/subscriptionRenewFailed', [DocumentationController::class, 'subscriptionRenewFailed']);
Route::get('/subscriptionRenewed', [DocumentationController::class, 'subscriptionRenewed']);
Route::get('/subscriptionSuspended', [DocumentationController::class, 'subscriptionSuspended']);
Route::get('/subscriptionToBeDeactivated', [DocumentationController::class, 'subscriptionToBeDeactivated']);
Route::get('/subscriptionToBeRenewed', [DocumentationController::class, 'subscriptionToBeRenewed']);
Route::get('/subscriptionTrialToBeEnded', [DocumentationController::class, 'subscriptionTrialToBeEnded']);
Route::get('/subscriptionResumed', [DocumentationController::class, 'subscriptionResumed']);

Route::any('/sms', [DocumentationController::class, 'sms']);
Route::get('/notifySmsDeliveryReport', [DocumentationController::class, 'notifySmsDeliveryReport']);
Route::get('/notifySmsReception', [DocumentationController::class, 'notifySmsReception']);
