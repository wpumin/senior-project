<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ลืมรหัสผ่าน</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <p class="text">รหัส OTP ของคุณคือ</p>
        {{-- <a href="{{ $url_reset_password }}" class="btn btn-primary">เปลี่ยนรหัสผ่านชั่วคราว</a> --}}
        <p>Ref: {{ $ref }}</p>
        <p>OTP: {{ $otp }}</p>
    </div>
</body>
</html>