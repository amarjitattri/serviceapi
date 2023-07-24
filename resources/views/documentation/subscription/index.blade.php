@extends('layouts.documentation')
@section('content')
    <div class="card">
        <div class="card-header">
            The following operations are supported.  For a formal definition, please review the
        </div>
        <div class="card-body">
        <blockquote class="blockquote mb-0">
            <ul>
                <li><a href="subscriptionCreated">SubscriptionCreated</a></li>
                <li><a href="subscriptionDeactivated">SubscriptionDeactivated</a></li>
                <li><a href="subscriptionRenewFailed">SubscriptionRenewFailed</a></li>
                <li><a href="subscriptionRenewed">SubscriptionRenewed</a></li>
                <li><a href="subscriptionSuspended">SubscriptionSuspended</a></li>
                <li><a href="subscriptionToBeDeactivated">SubscriptionToBeDeactivated</a></li>
                <li><a href="subscriptionToBeRenewed">SubscriptionToBeRenewed</a></li>
                <li><a href="subscriptionTrialToBeEnded">SubscriptionTrialToBeEnded</a></li>
                <li><a href="subscriptionResumed">SubscriptionResumed</a></li>
            </ul>
            {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
        </blockquote>
        </div>
    </div>
@endsection
