<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Choosing Areion Productions</title>
</head>
<body style="font-family: Arial, sans-serif;">

<div
    style="text-align: center;max-width: 600px;margin: 0 auto;padding: 20px;border: 1px solid #b79999;border-radius: 10px;background-color: #000;">

    <img src="{{url('/assets/img/logo.png')}}" alt="Areion Productions" style="max-width: 25%; margin-bottom: 20px;">

    <p style="color: #ffffff">
        Hello {{ $formData['name'] }},
    </p>
    <p style="color: #ffffff">
        Email: {{ $formData['email'] }}
    </p>
    <p style="color: #ffffff">
        Message: {{ $formData['message'] }}
    </p>

</div>
</body>
</html>
