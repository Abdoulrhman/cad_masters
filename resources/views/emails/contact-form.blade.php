<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .header {
        background-color: #f8f9fa;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .content {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        border: 1px solid #dee2e6;
    }

    .field {
        margin-bottom: 15px;
    }

    .field-label {
        font-weight: bold;
        color: #666;
    }

    .message {
        margin-top: 20px;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
            <p>A new contact form has been submitted through the website.</p>
        </div>

        <div class="content">
            <div class="field">
                <div class="field-label">Recipient Type:</div>
                <div>{{ ucfirst($data['recipient_type']) }}</div>
            </div>

            <div class="field">
                <div class="field-label">Name:</div>
                <div>{{ $data['first_name'] }} {{ $data['last_name'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">Email:</div>
                <div>{{ $data['email'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">Phone:</div>
                <div>{{ $data['phone'] }}</div>
            </div>

            <div class="message">
                <div class="field-label">Message:</div>
                <div>{{ $data['message'] }}</div>
            </div>

            @if(!empty($data['file_path']))
            <div class="field">
                <div class="field-label">Attachment:</div>
                <div>A file was attached to this submission.</div>
            </div>
            @endif
        </div>
    </div>
</body>

</html>
