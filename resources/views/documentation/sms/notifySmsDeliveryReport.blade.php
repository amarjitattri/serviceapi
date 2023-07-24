@extends('layouts.documentation')
@section('content')
<div class="docs-content">
    <div class="container">
        <article class="docs-article" id="section-1">
            <header class="docs-header">
                <h1 class="docs-heading">NotifySmsDeliveryReport</h1>
                <section class="docs-intro">
                    <p>The test form is only available for requests from the local machine</p>
                </section><!--//docs-intro-->
            </header>
            <div>
                <code>POST: {{$request_url}}/NotifySmsDeliveryReport</code>
                <h6>
                    Request Body:
                </h6>
            </div>
            <div class="mb-2 bg-dark text-white p-2">
                <pre id="json" class="text-white">
                </pre>
            </div>
            <div>
                <h6>Response: </h6>
            </div>
            <div class="mb-2 bg-dark text-white">
                <pre id="response" class="text-white p-2">
                </pre>
            </div>
        </article>
    </div>
</div>
<script>
    const data = {
            "SessionId": "string",
            "MessageKey":"string",
            "DeliveryInformation":{
                "Address":{
                    "Msisdn" : "string",
                    "Asid" : "Asid"
                },
                "SmsDeliveryStatus" : "Delivered"
            },
            "NamedParam":{
                "Key":"string",
                "Value":"string"
            },
            "NamedParam2":{
                "Key":"string",
                "Value":"string"
            }
        };

        const response = {
            "resultCode": "OK"
        };
    document.getElementById("json").innerHTML = JSON.stringify(data, undefined, 2);
    document.getElementById("response").innerHTML = JSON.stringify(response, undefined, 2);
</script>
@endsection
