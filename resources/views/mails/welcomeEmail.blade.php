@component('mail::message')

# Hello {{ $user->username}} 

Welcome to My Admission Assistant. Your registration was successful!!!<br><br>
You can login with

</p>
<br>
## Username: {{ $user->username }}
## Password: "password123"
<br>


To login to your account, <a href="{{url('/login')}}"> CLICK HERE. </a><br><br>

Thanks,<br>
Management
@endcomponent
