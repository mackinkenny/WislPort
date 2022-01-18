@component('mail::message')
    <html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="" style="font-family: 'Barlow'; padding:4%;">
        <br>
        <span style="font-size:40px; color:#000000">WislPort</span>
        <br>
        <h2 style="font-family: 'Barlow';"><strong> You were invited to WislPort</strong></h2>
        <br>
        <br>
        <a href="{{$server}}/register/company/{{$code}}" style="color: white; background-color: #1B3C5D; font-size: 18px; padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1rem; padding-bottom: 1rem;  border-radius: 5px; font-weight: 500;" >
            Accept Now
        </a>
        <br>
        <br>
        <br>
    </div>
    </body>
    </html>
@endcomponent
