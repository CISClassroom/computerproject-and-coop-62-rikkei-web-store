@component('mail::message')
# {{ $title }}

{{ $message }}

@component('mail::button', ['url' => $url, 'target' => '_blank'])
{{ $buttonText }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
