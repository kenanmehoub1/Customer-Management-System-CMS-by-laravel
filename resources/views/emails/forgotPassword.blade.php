<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f7f9fc;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .email-container {
            max-width: 600px;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin: 0 auto;
        }
        
        .email-header {
            background: linear-gradient(135deg, #3498db 0%, #1a56db 100%);
            padding: 30px 20px;
            text-align: center;
            color: white;
        }
        
        .email-header h1 {
            font-weight: 600;
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .email-body {
            padding: 40px 30px;
            color: #333333;
            line-height: 1.6;
        }
        
        .greeting {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 25px;
            color: #2c3e50;
        }
        
        .message {
            margin-bottom: 30px;
            font-size: 16px;
            color: #555555;
        }
        
        .button-container {
            text-align: center;
            margin: 35px 0;
        }
        
        .reset-button {
            display: inline-block;
            background: linear-gradient(135deg, #3498db 0%, #1a56db 100%);
            color: white;
            text-decoration: none;
            padding: 16px 42px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
            transition: all 0.3s ease;
        }
        
        .reset-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        }
        
        .link-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777777;
        }
        
        .code-box {
            background: #f8f9fa;
            border-left: 4px solid #3498db;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
            font-family: monospace;
            word-break: break-all;
        }
        
        .footer {
            text-align: center;
            padding: 25px;
            background: #f8f9fa;
            color: #777777;
            font-size: 14px;
        }
        
        .warning {
            background: #fff4e6;
            border-radius: 8px;
            padding: 15px;
            margin: 25px 0;
            border-left: 4px solid #ffa94d;
            font-size: 14px;
        }
        
        .icon {
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .icon svg {
            width: 70px;
            height: 70px;
            fill: #3498db;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Password Reset Request</h1>
        </div>
        
        <div class="email-body">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M18 10v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-5 7.723v2.277h-2v-2.277c-.595-.347-1-.984-1-1.723 0-1.104.896-2 2-2s2 .896 2 2c0 .739-.405 1.376-1 1.723zm-5-7.723v-4c0-2.206 1.794-4 4-4s4 1.794 4 4v4h-8z"/>
                </svg>
            </div>
            
            <p class="greeting">Hello, {{ $admin->name }}</p>
            
            <p class="message">We received a request to reset your password. Click the button below to choose a new password:</p>
            
            <div class="button-container">
                <a href="{{ url('/admin/Change/password?code=' . $code . '&admin_id=' . $admin->id) }}" class="reset-button">
                    Reset Password
                </a>
            </div>
            
            <div class="link-text">
                <p>Or copy and paste this URL into your browser:</p>
                <div class="code-box">
                    {{ url('/admin/Change/password?code=' . $code . '&admin_id=' . $admin->id) }}
                </div>
            </div>
            
            <div class="warning">
                <p><strong>Important:</strong> This password reset link will expire in 60 minutes. If you didn't request a password reset, please ignore this email or contact support if you have concerns.</p>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2023 Your Company Name. All rights reserved.</p>
            <p>This is an automated message, please do not reply to this email.</p>
        </div>
    </div>
</body>
</html>