<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mail_data['title'] }}</title>
</head>
<body>
    <h1>Product Delivery</h1>
    <p>Dear {{ $mail_data['name'] }},</p>
    <p>Thank you for choosing our digital product shop. <u>Here is your products,</u></p>
    <p>
        {{ $mail_data['product'] }}
    </p>
    <p>Best regards,</p>
    <p>The Digital Product Shop Team</p>
</body>
</html>