<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email Reply</title>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f4f6f8;
        font-family: Arial, Helvetica, sans-serif;
    }

    .email-wrapper {
        width: 100%;
        padding: 40px 0;
        background-color: #f4f6f8;
    }

    .email-container {
        max-width: 600px;
        margin: auto;
        background: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    .header {
        background: linear-gradient(135deg, #4e54c8, #8f94fb);
        color: #fff;
        padding: 25px;
        text-align: center;
    }

    .header h1 {
        margin: 0;
        font-size: 22px;
        letter-spacing: 1px;
    }

    .content {
        padding: 30px;
        color: #333;
        line-height: 1.6;
    }

    .content h2 {
        margin-top: 0;
        font-size: 20px;
    }

    .message-box {
        background: #f8f9fb;
        border-left: 4px solid #4e54c8;
        padding: 15px;
        margin: 20px 0;
        border-radius: 6px;
        font-style: italic;
    }

    .button {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 20px;
        background: #4e54c8;
        color: #fff;
        text-decoration: none;
        border-radius: 25px;
        font-size: 14px;
    }

    .footer {
        text-align: center;
        padding: 20px;
        font-size: 12px;
        color: #888;
        background: #fafafa;
    }
</style>
</head>

<body>

<div class="email-wrapper">
    <div class="email-container">

        <div class="header">
            <h1>Your Company</h1>
        </div>

        <div class="content">
            <h2>Hello {{ $name ?? 'User' }},</h2>
            <p>
                Thank you for reaching out to us. We’ve received your message and truly appreciate you taking the time to contact us.
            </p>

            <div class="message-box">
                "{{ $mailBody ?? 'Your message will appear here.' }}"
            </div>

            <p>
                Our team will review your request and get back to you as soon as possible. If your query is urgent, feel free to reply directly to this email.
            </p>

            <p>
                We’re here to help and look forward to assisting you.
            </p>

            <a href="#" class="button">Visit Our Website</a>

            <p style="margin-top: 30px;">
                Regards,<br>
                <strong>Your Company Team</strong>
            </p>
        </div>

        <div class="footer">
            © 2026 Your Company. All rights reserved.
        </div>

    </div>
</div>

</body>
</html>
