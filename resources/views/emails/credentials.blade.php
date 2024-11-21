<!DOCTYPE html>
<html>
<head>
    <title>Your Login Credentials</title>
</head>
<body>
    <h2>Welcome, {{ $name }}</h2>
    <p>Thank you for applying! Below are your login credentials:</p>
    <ul>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Password:</strong> {{ $password }}</li>
    </ul>
    <p>You can log in to your account using the following link:</p>
    <a href="{{ $loginUrl }}">{{ $loginUrl }}</a>
    <p>Once logged in, you can view the status of your application.</p>
    <p>Best regards,<br>STEM SSP Team</p>
</body>
</html>
