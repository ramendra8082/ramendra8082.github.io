@component('mail::message')

##Hi {{$name}}.

<p>Welcome to {{ config('app.name') }}!</p>

@endcomponent