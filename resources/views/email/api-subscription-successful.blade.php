<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>API Subscription Successful</title>

        <style>
            .container {
                max-width: 600px;
                margin: 40px auto;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                overflow: hidden;
            }

            .header {
                background-color: #0d6efd;
                padding: 20px;
                text-align: center;
                color: #ffffff;
            }

            .header h1 {
                margin: 0;
                font-size: 20px;
                letter-spacing: 0.5px;
            }

            .content {
                padding: 30px;
            }

            .content h2 {
                margin-top: 0;
                font-size: 18px;
                color: #0d6efd;
            }

            .details {
                margin-top: 20px;
                border: 1px solid #e5e7eb;
                border-radius: 6px;
                padding: 20px;
                background-color: #f9fafb;
            }

            .detail-row {
                display: flex;
                justify-content: space-between;
                margin-bottom: 10px;
                font-size: 14px;
            }

            .detail-row span:first-child {
                font-weight: bold;
                color: #555;
            }

            .success-badge {
                display: inline-block;
                padding: 6px 12px;
                background-color: #d1fae5;
                color: #065f46;
                font-size: 12px;
                border-radius: 20px;
                font-weight: bold;
                margin-bottom: 15px;
            }

            .footer {
                padding: 20px;
                text-align: center;
                font-size: 12px;
                color: #888888;
                background-color: #f9fafb;
            }

            .api-key {
                font-family: monospace;
                background-color: #eef2ff;
                padding: 6px 8px;
                border-radius: 4px;
                font-size: 13px;
                word-break: break-all;
            }
        </style>
    </head>

    <body>

        <div class="content"> <span class="success-badge">Payment Successful</span>
            <h2>Your API Service Payment Has Been Processed</h2>
            <p> This is to confirm that your recent payment for API services has been successfully processed. Your
                account has been updated and API access remains active. </p>
            <div class="details">
                <div class="detail-row"> <span>Transaction ID:</span> <span>TXN-9F3A7K28XQ</span> </div>
                <div class="detail-row"> <span>Payment Date:</span> <span>February 08, 2026</span> </div>
                <div class="detail-row"> <span>Amount Paid:</span> <span>$120.00 USD</span> </div>
                <div class="detail-row"> <span>Payment Method:</span> <span>Card (**** 0627)</span> </div>
                <div class="detail-row"> <span>Service Plan:</span> <span>Professional API Plan</span> </div>
                <div class="detail-row"> <span>API Key (Hashed):</span> <span
                        class="api-key">sk_live_************************7F3A</span> </div>
            </div>
            <p style="margin-top:20px;"> For security reasons, only a masked version of your API key is displayed above.
                If you did not authorize this transaction, please contact support immediately. </p>
        </div>
        <div class="footer">This is an automated notification.
            Please do not reply to this email. </div>
        </div>
        {{-- <div class="footer"> © 2026 Your Company Name. All rights reserved.<br> This is an automated notification.
            Please do not reply to this email. </div>
        </div> --}}

    </body>

</html>
