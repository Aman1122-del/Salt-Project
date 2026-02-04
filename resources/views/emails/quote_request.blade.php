<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Quote Request</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f4f4; margin: 0; padding: 0; }
        .email-wrapper { max-width: 600px; margin: 0 auto; background-color: #ffffff; }
        .header { background-color: #ffffff; padding: 20px; text-align: center; border-bottom: 3px solid #f7c873; }
        .header img { max-height: 60px; }
        .content { padding: 30px 20px; }
        .h2-title { color: #f8ad9d; margin-top: 0; font-size: 22px; text-align: center; }
        .info-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .info-table td { padding: 12px; border-bottom: 1px solid #eeeeee; }
        .label { font-weight: bold; width: 120px; color: #555; }
        .value { color: #333; }
        .message-box { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #f8ad9d; margin-top: 20px; border-radius: 4px; }
        .footer { background-color: #333333; color: #ffffff; padding: 20px; text-align: center; font-size: 12px; }
        .footer a { color: #f7c873; text-decoration: none; }
        .highlight { color: #f8ad9d; font-weight: bold; }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <!-- Header -->
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/Logo_fitted.png') }}" alt="Salt International">
            </a>
        </div>

        <!-- Content -->
        <div class="content">
            <h2 class="h2-title">New Quotation Request</h2>
            <p style="text-align: center; color: #666;">You have received a new inquiry from Salt International.</p>

            <table class="info-table">
                <tr>
                    <td class="label">Name:</td>
                    <td class="value">{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td class="label">Email:</td>
                    <td class="value"><a href="mailto:{{ $data['email'] }}" style="color:#d10023;">{{ $data['email'] }}</a></td>
                </tr>
                <tr>
                    <td class="label">Phone:</td>
                    <td class="value">{{ $data['phone'] }}</td>
                </tr>
            </table>

            <div class="message-box">
                <div style="font-weight: bold; margin-bottom: 5px; color: #555;">Details / Requirements:</div>
                {{ $data['message'] }}
            </div>

            <p style="margin-top: 30px; text-align: center;">
                <a href="mailto:{{ $data['email'] }}" style="background-color: #d10023; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">Reply to Customer</a>
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; {{ date('Y') }} Salt International. All rights reserved.</p>
            <p>
                <a href="{{ url('/') }}">Visit Website</a> |
                <a href="mailto:info@saltinternational.com">Support</a>
            </p>
            <p style="color: #666; margin-top: 10px;">This is an automated notification.</p>
        </div>
    </div>
</body>
</html>