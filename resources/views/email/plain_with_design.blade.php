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