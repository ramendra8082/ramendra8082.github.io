@component('mail::message')
# New User {{$user->first_name}} {{$user->last_name}} Registered

Email: {{$user->email}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
