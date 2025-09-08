<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #10B981;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .contact-info h2 {
            color: #10B981;
            margin-top: 0;
            margin-bottom: 15px;
        }
        .info-row {
            display: flex;
            margin-bottom: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: bold;
            width: 120px;
            color: #495057;
        }
        .info-value {
            flex: 1;
            color: #212529;
        }
        .message-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .message-section h2 {
            color: #10B981;
            margin-top: 0;
            margin-bottom: 15px;
        }
        .message-content {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #10B981;
            font-style: italic;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
            <p>Al Najm Al Saeed Co. Ltd.</p>
        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <div class="info-row">
                <div class="info-label">Name:</div>
                <div class="info-value">{{ $contactData['full_name'] }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Email:</div>
                <div class="info-value">{{ $contactData['email'] }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Phone:</div>
                <div class="info-value">{{ $contactData['phone'] }}</div>
            </div>
            @if(!empty($contactData['company']))
            <div class="info-row">
                <div class="info-label">Company:</div>
                <div class="info-value">{{ $contactData['company'] }}</div>
            </div>
            @endif
            @if(!empty($contactData['service']))
            <div class="info-row">
                <div class="info-label">Service:</div>
                <div class="info-value">{{ ucfirst(str_replace('-', ' ', $contactData['service'])) }}</div>
            </div>
            @endif
        </div>

        <div class="message-section">
            <h2>Message</h2>
            <div class="message-content">
                {{ $contactData['message'] }}
            </div>
        </div>

        <div class="footer">
            <p>This message was sent from the contact form on your website.</p>
            <p>Please respond to the customer at: <strong>{{ $contactData['email'] }}</strong></p>
        </div>
    </div>
</body>
</html>
