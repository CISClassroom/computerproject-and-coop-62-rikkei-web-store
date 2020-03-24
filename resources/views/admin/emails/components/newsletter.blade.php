@component('mail::message')
# {{ $title }}

<img src="{{url($image_url)}}" style="max-height: 100%; width: 100%;" alt="Picture" />

{{ $message }}

@component('mail::button', ['url' => $url, 'target' => '_blank'])
{{ $buttonText }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
