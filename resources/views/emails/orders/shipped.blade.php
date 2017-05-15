@component('mail::message')
# Introduction

Order has been shipped.
Total price = {{$order->total}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
