@component('mail::message')
# Verify Email
 
### Please verify your email

@component('mail::button', ['url' => $url])
Verify
@endcomponent
 
Thanks Dear {{$user_name}} <br>
@endcomponent