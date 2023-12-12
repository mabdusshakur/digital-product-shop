<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>Dear Admin,</p>
    
    <p>You have received a new message from the contact form:</p>
    
    <ul>
        <li><strong>Name:</strong> {{ $mail_data['name'] }}</li>
        <li><strong>Email:</strong> {{ $mail_data['email'] }}</li>
        <li><strong>Message:</strong> {{ $mail_data['message'] }}</li>
    </ul>

</body>
</html>