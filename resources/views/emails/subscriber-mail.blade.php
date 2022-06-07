@component('mail::message')
# Cảm ơn bạn đã đăng ký

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
