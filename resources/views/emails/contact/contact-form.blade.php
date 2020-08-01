@component('mail::message')
# Bonjour Nous vous contactons a-propos de : 
    de la Par de : {{ $data['email'] }}

    la Maison : {{ $data['subject'] }}
        situe dans la ville de {{ $data['city'] }} 
        a {{ $data['place'] }}


        message : 
            {{ $data['message'] }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
