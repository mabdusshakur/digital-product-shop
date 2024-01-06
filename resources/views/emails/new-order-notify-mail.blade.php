<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>Dear Admin,</p>
    
    <p>You have received a new order: {{ $mail_data['order_id'] }}</p>
    
    <ul>
        <li><strong>Orderer Name:</strong> {{ $mail_data['name'] }}</li>
        <li><strong>Orderer Email:</strong> {{ $mail_data['email'] }}</li>
    </ul>

</body>
</html>