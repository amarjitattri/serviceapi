@extends('layouts.documentation')
@section('content')
<div class="docs-content">
    <div class="container">
        <article class="docs-article" id="section-1">
            <header class="docs-header">
                <h1 class="docs-heading">SubscriptionSuspended</h1>
                <section class="docs-intro">
                    <p>The test form is only available for requests from the local machine</p>
                </section><!--//docs-intro-->
            </header>
            <div>
                <code>POST: {{$request_url}}/subscription</code>
                <h6>
                    Request Body:
                </h6>
            </div>
            <div class="mb-2 bg-dark text-white p-2">
                <p>
                    POST /Subsription
                </p>
                <p>
                    Request Body
                </p>
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
    const data =
    {
        "RequestType": "SubscriptionSuspendedRequest",
        "NotificationKey ": "string",
        "Subscription":{
            "Key" : "string",
            "OfferKey" : "string",
            "ProductKey" : "string",
            "CreateDate" : "dateTime",
            "StartDate" : "dateTime",
            "LastRenewalDate" : "dateTime",
            "Status" : "ACTIVE",
            "SubscriptionProfile" :{
                "ServiceProfileAttributeKey" : "string",
                "AttrValue" : "string"
            },
            "SubscriptionProfile2" :{
                "ServiceProfileAttributeKey" : "string",
                "AttrValue" : "string"
            },
            "OnetimePricingPlans" :{
                "AbstractSubscriptionPricingPlan" : {
                    "Key" : "string",
                    "SubscriptionKey" : "string",
                    "PricingPlanKey" : "string",
                    "CreateDate" : "dateTime"
                },
            "ChargingStatus":"INIT"
            },
            "OnetimePricingPlans2" :{
                "AbstractSubscriptionPricingPlan" : {
                    "Key" : "string",
                    "SubscriptionKey" : "string",
                    "PricingPlanKey" : "string",
                    "CreateDate" : "dateTime"
                },
            "ChargingStatus":"INIT"
            },
            "RecurringPricingPlans" :{
                "AbstractSubscriptionPricingPlan" : {
                    "Key" : "string",
                    "SubscriptionKey" : "string",
                    "PricingPlanKey" : "string",
                    "CreateDate" : "dateTime"
                },
                "CurrentInterval":"integer",
                "AutoRenew":"integer",
                "CreateDate":"integer",
                "StartDate":"integer",
                "LastRenewalDate":"integer",
                "NextRenewalDate":"integer",
                "UnpaidPeriodEndDate":"integer",
                "ReminderDate":"integer",
                "PeriodBalanceInMillis":"integer"
            },
            "RecurringPricingPlans2" :{
                "AbstractSubscriptionPricingPlan" : {
                    "Key" : "string",
                    "SubscriptionKey" : "string",
                    "PricingPlanKey" : "string",
                    "CreateDate" : "dateTime"
                },
                "CurrentInterval":"integer",
                "AutoRenew":"integer",
                "CreateDate":"integer",
                "StartDate":"integer",
                "LastRenewalDate":"integer",
                "NextRenewalDate":"integer",
                "UnpaidPeriodEndDate":"integer",
                "ReminderDate":"integer",
                "PeriodBalanceInMillis":"integer"
            },
            "UsagePricingPlans" :{
                "AbstractSubscriptionPricingPlan" : {
                    "Key" : "string",
                    "SubscriptionKey" : "string",
                    "PricingPlanKey" : "string",
                    "CreateDate" : "dateTime"
                },
                "ServiceKey":"integer",
                "ChargingModel":"FLAT ",
                "StartDate":"integer",
                "LastRenewalDate":"integer",
                "NextRenewalDate":"integer",
                "UnpaidPeriodEndDate":"integer"
            },
            "UsagePricingPlan2s" :{
                "AbstractSubscriptionPricingPlan" : {
                    "Key" : "string",
                    "SubscriptionKey" : "string",
                    "PricingPlanKey" : "string",
                    "CreateDate" : "dateTime"
                },
                "ServiceKey":"integer",
                "ChargingModel":"FLAT ",
                "StartDate":"integer",
                "LastRenewalDate":"integer",
                "NextRenewalDate":"integer",
                "UnpaidPeriodEndDate":"integer"
            }
        },
        "Address ":{
            "Msisdn":"string",
            "Asid":"string"
        },
        "TxKey":"string",
        "PartnerReference":"string",
        "NamedParam ":{
            "Key":"string",
            "Value":"string"
        },
        "NamedParam2":{
            "Key":"string",
            "Value":"string"
        }
    };
        const response = {
            "ServiceResult ": {
                "ResultCode": "OK or FAILED",
                "ResultTxt": "string",
                "SmsMessage": "string",
                "SmsHeader": "string"
            }
        };
    document.getElementById("json").innerHTML = JSON.stringify(data, undefined, 2);
    document.getElementById("response").innerHTML = JSON.stringify(response, undefined, 2);
</script>
@endsection
