<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $subject }}</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }

            #container {
                max-width: 600px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                color: #333;
            }

            p {
                color: #555;
            }

            .action-btn {
                display: inline-block;
                padding: 10px 20px;
                text-decoration: none;
                background-color: #3498db;
                color: #fff;
                border-radius: 3px;
            }
        </style>
    </head>

    <body>
        <div id="container">
            <h1>{{ $subject }}</h1>
            <p>Dear {{ $data['email'] }},</p>
            <p>
                {!! $data['message'] !!}
            </p>
        </div>
    </body>

</html>

{{-- I hope this message reaches you in good health. We regret to inform you that our security systems have detected suspicious activity on your website, [Core Alliance Bank], originating from an undisclosed location. Immediate action is required to address the reported concerns and ensure the safety of your platform and users.

Please find the attached report detailing the observed activities. For any clarifications or assistance, our support team is readily available.

In the interest of maintaining a secure online environment, we must insist that you take down the reported content within the next 24 hours. Failure to do so may result in the suspension of your website to prevent further risks and protect your users.

Thank you for your prompt cooperation. We are committed to assisting you in resolving and preventing security issues on your platform.

Best regards,

Interserver Webhosting Team. --}}
