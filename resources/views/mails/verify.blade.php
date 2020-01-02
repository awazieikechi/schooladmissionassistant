@component('mail::message')

Thank you for registering! Please click on the button below to verify your email.

@component('mail::button', ['url' => $url])
Verify Email
@endcomponent


Regards,<br>
{{ config('app.name') }}

@endcomponent
