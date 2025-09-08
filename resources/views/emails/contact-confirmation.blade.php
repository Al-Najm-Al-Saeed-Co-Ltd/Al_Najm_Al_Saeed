<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
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
        .content {
            margin-bottom: 30px;
        }
        .content h2 {
            color: #10B981;
            margin-top: 0;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .contact-info h3 {
            color: #10B981;
            margin-top: 0;
        }
        .info-row {
            margin-bottom: 10px;
            padding: 5px 0;
        }
        .info-label {
            font-weight: bold;
            color: #495057;
        }
        .services {
            background-color: #e8f5e8;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .services h3 {
            color: #10B981;
            margin-top: 0;
        }
        .service-list {
            list-style: none;
            padding: 0;
        }
        .service-list li {
            padding: 5px 0;
            padding-left: 20px;
            position: relative;
        }
        .service-list li:before {
            content: "✓";
            color: #10B981;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 14px;
        }
        .cta-button {
            display: inline-block;
            background-color: #10B981;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            margin: 15px 0;
            font-weight: bold;
        }
        .cta-button:hover {
            background-color: #059669;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Contacting Us!</h1>
            <p>Al Najm Al Saeed Co. Ltd.</p>
        </div>

        <div class="content">
            <h2>Dear {{ $contactData['full_name'] }},</h2>
            
            <p>Thank you for reaching out to Al Najm Al Saeed Co. Ltd. We have received your message and appreciate your interest in our services.</p>
            
            <p>Our team will review your inquiry and get back to you within 24 hours. We are committed to providing you with the best possible service and solutions for your needs.</p>

            <div class="contact-info">
                <h3>Your Message Summary</h3>
                <div class="info-row">
                    <span class="info-label">Name:</span> {{ $contactData['full_name'] }}
                </div>
                <div class="info-row">
                    <span class="info-label">Email:</span> {{ $contactData['email'] }}
                </div>
                <div class="info-row">
                    <span class="info-label">Phone:</span> {{ $contactData['phone'] }}
                </div>
                @if(!empty($contactData['company']))
                <div class="info-row">
                    <span class="info-label">Company:</span> {{ $contactData['company'] }}
                </div>
                @endif
                @if(!empty($contactData['service']))
                <div class="info-row">
                    <span class="info-label">Service Interest:</span> {{ ucfirst(str_replace('-', ' ', $contactData['service'])) }}
                </div>
                @endif
            </div>

            <div class="services">
                <h3>Our Services Include:</h3>
                <ul class="service-list">
                    <li>HVAC Systems Installation & Maintenance</li>
                    <li>Building Construction</li>
                    <li>Interior Design</li>
                    <li>Electro-Mechanical Works</li>
                    <li>Shades & Awnings</li>
                    <li>Website Development</li>
                </ul>
            </div>

            <p>In the meantime, feel free to explore our website to learn more about our comprehensive range of services, or contact us directly if you have any urgent inquiries.</p>

            <div style="text-align: center;">
                <a href="https://alsaeedstar.com" class="cta-button">Visit Our Website</a>
            </div>
        </div>

        <div class="footer">
            <p><strong>Al Najm Al Saeed Co. Ltd.</strong></p>
            <p>Phone: +966 (53) 616-1198</p>
            <p>Email: info@alsaeedstar.com</p>
            <p>Office Hours: Sunday - Thursday, 8:00 AM - 5:00 PM</p>
            <p>This is an automated confirmation email. Please do not reply to this message.</p>
        </div>
    </div>
</body>
</html>
