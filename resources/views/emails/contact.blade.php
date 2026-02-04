<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query From Salt International</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: none;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background-color: #f8ad9d; /* Matching site primary color */
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
            font-weight: 500;
        }
        .content {
            padding: 30px;
        }
        .field-group {
            margin-bottom: 20px;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 15px;
        }
        .field-group:last-child {
            border-bottom: none;
        }
        .label {
            display: block;
            font-size: 12px;
            color: #888888;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        .value {
            font-size: 16px;
            line-height: 1.5;
            color: #333333;
        }
        .footer {
            background-color: #333333;
            color: #ffffff;
            text-align: center;
            padding: 15px;
            font-size: 12px;
        }
        .footer a {
            color: #f8ad9d;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Query From Salt International</h1>
        </div>
        <div class="content">
            <p style="margin-bottom: 25px; color: #666;">
                You have received a new inquiry from the website contact form. Here are the details:
            </p>

            <div class="field-group">
                <span class="label">Name</span>
                <div class="value">{{ $data['fname'] }} {{ $data['lname'] }}</div>
            </div>

            <div class="field-group">
                <span class="label">Email Address</span>
                <div class="value"><a href="mailto:{{ $data['email'] }}" style="color: #f8ad9d; text-decoration: none;">{{ $data['email'] }}</a></div>
            </div>

            <div class="field-group">
                <span class="label">Subject</span>
                <div class="value">{{ $data['subject'] }}</div>
            </div>

            <div class="field-group">
                <span class="label">Message</span>
                <div class="value" style="white-space: pre-wrap;">{{ $data['message'] }}</div>
            </div>
            
            <div style="margin-top: 30px; text-align: center;">
                <a href="mailto:{{ $data['email'] }}" style="background-color: #f8ad9d; color: #ffffff; padding: 12px 25px; text-decoration: none; border-radius: 4px; font-weight: bold;">Reply via Email</a>
            </div>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Salt International. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
