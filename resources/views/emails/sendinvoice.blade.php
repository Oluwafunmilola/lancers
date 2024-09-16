@component('mail::message')
# Hello {{$data['name']}}

{{$data['user']}} has sent you an invoice of the sum of NGN {{$data['amount']}} for the project {{$data['project']}}

Use the button below to view the invoice and make payment.

<p>Your project Tracking code</p>

<h1> Tracking Code :  {{$data['trackingcode']}} </h1>

@component('mail::button', ['url' => url($data['invoice_url'])])
View Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
