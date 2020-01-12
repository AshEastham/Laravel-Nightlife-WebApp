@component('mail::message')
# New Venue: {{ $venue->name }}

{{ $venue->about }}

@component('mail::button', ['url' => url('/venues/' . $venue->name)])
View Venue
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
