<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Xin chào {{$userName}}</h2>
    <p>Cảm ơn bạn đã đăng ký thành viên </p>
    <p>Mời xác thực tài khoản để tiếp tục sử dụng các tính năng trên hệ thống</p>
    <button>
        <a href="http://asm-ph35301.test/auth/verify/{{$token}}">Xác nhận tài khoản</a>
    </button>
    
</body>
</html>