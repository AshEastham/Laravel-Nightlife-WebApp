@component('mail::message')
# New Event: {{ $event->name }}

{{ $event->biography }}

@component('mail::button', ['url' => url('/events/' . $event->name)])
View Event
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
