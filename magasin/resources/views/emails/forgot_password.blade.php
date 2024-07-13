@component('mail::message')

Hi, {{$user->name ?? 'None'}}. Forgot password ?

<p> It happens. Click the link below to reset your password.</p>

    @component('mail::button', ['url'=>url('reset/'.$user->remember_token ?? 'None')]);

    Reset your password
    
    @endcomponent


    In case you have any issue recovering your passcode, please contact us using the form from contact-us page. Thanks,<br>


    {{config('app.name')}}

@endcomponent