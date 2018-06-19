@component('mail::message')
# Activate your account

Thanks for signing up, please activate your account.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
