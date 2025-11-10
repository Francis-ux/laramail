<!doctype html>
<html>

    <body style="font-family: Arial, sans-serif; color:#222; margin:0; padding:24px;">
        <div style="max-width:600px; margin:0 auto; border:1px solid #eee; padding:18px; border-radius:8px;">
            <h3 style="margin:0 0 8px 0; font-size:18px;">Subscription Confirmed</h3>
            <p style="margin:0 0 12px 0;">Hi <strong>{{ $data['email'] }}</strong>,</p>

            <p style="margin:0 0 12px 0;">
                Thanks — your 1-year subscription to <strong>Fake Data</strong> (Fake Data API) is active.
            </p>

            <p style="margin:0 0 12px 0;">
                <strong>Expires:</strong> {{ \Carbon\Carbon::now()->addYear()->format('M d, Y') }} &nbsp; | &nbsp;
                <strong>Amount:</strong> $95
            </p>

            <p style="margin:14px 0 0 0; font-size:13px; color:#666;">
                Need help? <a href="mailto:frustrations@haterapps.com">frustrations@haterapps.com</a>
            </p>
        </div>
    </body>

</html>
