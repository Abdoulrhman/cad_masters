<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Course Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #5169f1;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 0 0 5px 5px;
        }
        .info-group {
            margin-bottom: 15px;
        }
        .info-label {
            font-weight: bold;
            color: #5169f1;
        }
        .message-box {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>New Course Registration</h2>
    </div>

    <div class="content">
        <div class="info-group">
            <p class="info-label">Course:</p>
            <p>{{ $registration->course->title }}</p>
        </div>

        <div class="info-group">
            <p class="info-label">Student Information:</p>
            <p>Name: {{ $registration->first_name }} {{ $registration->last_name }}</p>
            <p>Email: {{ $registration->email }}</p>
            <p>Phone: {{ $registration->phone }}</p>
            <p>Education Level: {{ $registration->education_level }}</p>
        </div>

        <div class="info-group">
            <p class="info-label">Message from Student:</p>
            <div class="message-box">
                {{ $registration->message }}
            </div>
        </div>

        <div class="info-group">
            <p class="info-label">CV:</p>
            <p>The student's CV is attached to this email.</p>
        </div>
    </div>

    <div class="footer">
        <p>This is an automated message from the CAD Masters Course Registration System.</p>
    </div>
</body>
</html>
