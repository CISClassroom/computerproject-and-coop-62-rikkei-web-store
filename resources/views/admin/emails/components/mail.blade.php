@component('mail::message')
# Hello! {{ $name ?? '' }}

{{ $message ?? '' }}

@component('mail::button', ['url' => $url ?? '', 'target' => '_blank'])
{{ $buttonText ?? 'Click' }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
