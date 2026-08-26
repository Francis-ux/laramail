<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Subscription Confirmed</title>
        <!--[if mso]>
<noscript>
<xml>
<o:OfficeDocumentSettings>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
</noscript>
<![endif]-->
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                background-color: #f2f3f5;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
                color: #1a1a1a;
            }

            .email-wrapper {
                width: 100%;
                background-color: #f2f3f5;
                padding: 40px 16px;
            }

            .email-content {
                max-width: 560px;
                margin: 0 auto;
                background-color: #ffffff;
                border: 1px solid #e6e6e9;
                border-radius: 8px;
            }

            /* Header */
            .header {
                padding: 32px 40px 24px 40px;
                border-bottom: 1px solid #eeeef0;
            }

            .logo {
                font-size: 14px;
                font-weight: 700;
                color: #1a1a1a;
                letter-spacing: 0.3px;
                margin: 0;
            }

            /* Body */
            .body-content {
                padding: 32px 40px 8px 40px;
            }

            .status-line {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }

            .status-dot {
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background-color: #1a9c58;
                margin-right: 8px;
                flex: 0 0 8px;
            }

            .status-text {
                font-size: 13px;
                font-weight: 600;
                color: #1a9c58;
                text-transform: uppercase;
                letter-spacing: 0.4px;
            }

            h1.title {
                font-size: 20px;
                font-weight: 600;
                color: #1a1a1a;
                margin: 0 0 12px 0;
                line-height: 1.3;
            }

            .intro-text {
                font-size: 14px;
                line-height: 1.6;
                color: #55575c;
                margin: 0 0 28px 0;
            }

            /* Summary block — plain, receipt style */
            .summary {
                margin-bottom: 28px;
                border: 1px solid #eeeef0;
                border-radius: 8px;
                padding: 4px 20px;
                background-color: #fbfbfc;
            }

            .summary-title {
                font-size: 11px;
                font-weight: 700;
                color: #8b8d94;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin: 16px 0 8px 0;
            }

            .summary-row {
                padding: 14px 0;
                border-bottom: 1px solid #eceded;
            }

            .summary-row .label {
                display: block;
                font-size: 11px;
                font-weight: 600;
                color: #8b8d94;
                text-transform: uppercase;
                letter-spacing: 0.4px;
                margin: 0 0 4px 0;
            }

            .summary-row .value {
                display: block;
                font-size: 14px;
                color: #1a1a1a;
                font-weight: 500;
            }

            .summary-row.total {
                border-bottom: none;
                border-top: 1.5px solid #1a1a1a;
                margin-top: 6px;
                padding-top: 18px;
                padding-bottom: 18px;
            }

            .summary-row.total .label {
                color: #6b6d72;
            }

            .summary-row.total .value {
                font-weight: 700;
                font-size: 18px;
            }

            .value-sub {
                font-size: 12px;
                font-weight: 400;
                color: #8b8d94;
            }

            /* CTA */
            .cta-wrapper {
                margin: 28px 0 32px 0;
            }

            .cta-button {
                display: inline-block;
                background-color: #1a1a1a;
                color: #ffffff !important;
                font-size: 14px;
                font-weight: 600;
                text-decoration: none;
                padding: 12px 22px;
                border-radius: 6px;
            }

            .divider {
                border: none;
                border-top: 1px solid #eeeef0;
                margin: 0 0 28px 0;
            }

            /* Next steps */
            .next-steps h2 {
                font-size: 13px;
                font-weight: 700;
                color: #1a1a1a;
                text-transform: uppercase;
                letter-spacing: 0.4px;
                margin: 0 0 16px 0;
            }

            .step-row {
                display: flex;
                align-items: baseline;
                margin-bottom: 12px;
                font-size: 14px;
                line-height: 1.5;
                color: #55575c;
            }

            .step-row .step-index {
                flex: 0 0 20px;
                color: #a9abb1;
                font-weight: 600;
            }

            .step-row .step-body a {
                color: #1a1a1a;
                text-decoration: underline;
            }

            .support-note {
                font-size: 13px;
                color: #8b8d94;
                line-height: 1.6;
                margin: 28px 0 0 0;
            }

            .support-note a {
                color: #55575c;
                text-decoration: underline;
            }

            /* Footer */
            .footer {
                padding: 24px 40px 32px 40px;
                border-top: 1px solid #eeeef0;
            }

            .footer p {
                font-size: 12px;
                color: #a9abb1;
                margin: 3px 0;
                line-height: 1.5;
            }

            .footer a {
                color: #8b8d94;
                text-decoration: underline;
            }

            @media only screen and (max-width: 600px) {

                .header,
                .body-content,
                .footer {
                    padding-left: 24px !important;
                    padding-right: 24px !important;
                }

                .summary {
                    padding: 4px 16px;
                }
            }
        </style>
    </head>

    <body>
        <div class="email-wrapper">
            <div class="email-content">

                <!-- Header -->
                <div class="header">
                    <p class="logo">Pulumi API</p>
                </div>

                <!-- Body -->
                <div class="body-content">

                    <div class="status-line">
                        <span class="status-dot"></span>
                        <span class="status-text">Payment successful</span>
                    </div>

                    <h1 class="title">Your subscription is active</h1>
                    <p class="intro-text">
                        Hi {{ $receiverEmail }}, thanks for subscribing. Your API subscription plan has been
                        activated and is ready to use. A summary of your purchase is below.
                    </p>

                    <!-- Summary -->
                    <div class="summary">
                        <p class="summary-title">Order Summary</p>

                        <div class="summary-row">
                            <span class="label">Plan</span>
                            <span class="value">Individual</span>
                        </div>
                        {{-- <div class="summary-row">
                            <span class="label">Order ID</span>
                            <span class="value">{{ $orderId }}</span>
                        </div> --}}
                        <div class="summary-row">
                            <span class="label">API Request Limit</span>
                            <span class="value">Up to 2M req / month</span>
                        </div>
                        <div class="summary-row">
                            <span class="label">Activated On</span>
                            <span class="value">{{ now()->format('M j, Y \a\t g:i A') }}</span>
                        </div>
                        {{-- <div class="summary-row">
                            <span class="label">Next Billing Date</span>
                            <span class="value">{{ $nextBillingDate }}</span>
                        </div> --}}
                        <div class="summary-row">
                            <span class="label">Payment Method</span>
                            <span class="value">USD Card</span>
                        </div>

                        <div class="summary-row total">
                            <span class="label">Total Paid</span>
                            <span class="value">$49.00 <span class="value-sub">/ yr</span></span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="cta-wrapper">
                        <a href="https://app.pulumi.com/examsoftware4-gmail-com" class="cta-button" target="_blank">Go
                            to dashboard</a>
                    </div>

                    <hr class="divider">

                    <!-- Next Steps -->
                    <div class="next-steps">
                        <h2>Get started</h2>

                        <div class="step-row">
                            <span class="step-index">1.</span>
                            <span class="step-body">Generate your API key from the dashboard's API Keys
                                section.</span>
                        </div>

                        <div class="step-row">
                            <span class="step-index">2.</span>
                            <span class="step-body">Read the <a href="https://www.pulumi.com/docs/">quickstart
                                    docs</a> to make your first request.</span>
                        </div>

                        <div class="step-row">
                            <span class="step-index">3.</span>
                            <span class="step-body">Set up usage alerts so you're notified before hitting your
                                monthly limit.</span>
                        </div>
                    </div>

                    <p class="support-note">
                        Questions? Reach out at <a href="mailto:support@pulumi.com">support@pulumi.com</a> or visit
                        our <a href="https://www.pulumi.com/contact/">Help Center</a>.
                    </p>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <p>Pulumi Corporation &middot; 601 Union St., Suite 1415, Seattle, WA 98101</p>
                    {{-- <p>
                        <a href="https://app.pulumi.com/examsoftware4-gmail-com/settings/billing-usage">Manage subscription</a> &nbsp;&middot;&nbsp;
                        <a href="{{ invoice_url }}">View invoice</a> &nbsp;&middot;&nbsp;
                        <a href="{{ unsubscribe_url }}">Unsubscribe</a>
                    </p> --}}
                    <p>&copy; {{ date('Y') }} Pulumi Corporation. All rights reserved.</p>
                </div>

            </div>
        </div>
    </body>

</html>
