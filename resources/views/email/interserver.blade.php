<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Template</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }

            .container {
                width: 100%;
                margin: 0 auto;
                background-color: #ffffff;
                border: 1px solid #dddddd;
            }

            .header {
                background-color: #000000;
                padding: 10px;
                /* text-align: center; */
            }

            .header img {
                max-width: 100%;
                height: auto;
            }

            .content {
                padding: 20px;
            }

            .content h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .content p {
                font-size: 16px;
                line-height: 1.5;
            }

            .content .code {
                font-size: 18px;
                font-weight: bold;
                color: #ff0000;
            }

            .footer {
                background-color: #000000;
                color: #ffffff;
                text-align: center;
                padding: 10px;
                font-size: 12px;
            }

            .footer a {
                color: #ffffff;
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <img src="https://www.interserver.net/images/logo.png" alt="InterServer Logo">
            </div>
            <div class="content">
                <p>
                    {!! $data['message'] !!}
                </p>
                <p>Thank You,<br>InterServer Team.</p>
            </div>
            <div class="footer">
                © {{ date('Y') }} - All Rights Reserved. InterServer, PO BOX 1707 Englewood Cliffs NJ 07632 - 201-605-1440
                <br><a href="https://www.interserver.net">www.interserver.net</a>
            </div>
        </div>
    </body>

</html>
