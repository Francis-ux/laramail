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

{{-- I hope this message finds you well. We wanted to urgently remind you about the upcoming annual maintenance for your website, https://sovereignpulsebk.com/.

As previously discussed, our annual maintenance fee is $14, which ensures the smooth functioning and security of your online presence. This fee is a once-a-year investment to maintain the high-quality performance of your website.

Please note that the deadline for completing the annual maintenance is in 4 days. Failure to do so may result in limitations on the website's functionality or access.

To avoid any disruptions or inconveniences, we kindly ask that you proceed with the payment within the next 4 days.

If you have any questions or need assistance, please feel free to reach out to us. We are here to help ensure that your website continues to operate efficiently and effectively.

Thank you for your attention to this matter.

Best regards, --}}
