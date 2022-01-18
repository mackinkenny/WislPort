@component('mail::message')
    <html>
    <head>
    </head>
    <body>
    <div class="" style=" text-align:center; padding:4%;">
        <img src="{{$server}}/image/logomail.png" style="width:155px;" class="logo" alt="WislPort Logo">
        <br>
        <span style="font-size:40px; color:#000000">Healthcheck Tool</span>
        <br>
        <h2 style="font-weight: normal; margin-top: 15px; text-align: center!important;"> You have been invited to collaborate on our whistleblowing programme assessment</h2>
        <br>
        <br>
            <a href="{{$server}}/register/user/{{$code}}" style="color: white; background-color: #1B3C5D; font-size: 18px; padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1rem; padding-bottom: 1rem;  border-radius: 5px; font-weight: 500;">
               Accept Now
            </a>
        <br>
        <br>
        <br>
    </div>
    </body>
    </html>
@endcomponent
