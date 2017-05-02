
@component('mail::message')
# Verify Your Email Address

Thanks for creating an account with {{ config('app.name') }}.
Please follow the link below to verify your email address

@component('mail::button', ['url' => URL::to('register/verify/' . $token)])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent