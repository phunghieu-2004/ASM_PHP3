<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Xin chào {{$order->user->name}}</h2>
    <p>Cảm ơn bạn đã đăng ký thành viên </p>
    <p>Mời xác thực tài khoản để tiếp tục sử dụng các tính năng trên hệ thống</p>
    <h4>Your order detail</h4>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>STT</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>SubTotal</th>

        </tr>
       
        <tr>
            @foreach ($order->details as $detail)

            <td>{{$loop ->index +1}}</td>
            <td>{{$detail->product ? $detail->product->name : 'N/A'}}</td>
            <td>{{$detail->price}}</td>
            <td>{{$detail->quantity}}</td>
            <td>{{$detail->price * $detail->quantity }}</td>
            @endforeach


        </tr>
        </tr>
    </table>
    <button>
        <a href="{{route('order.verify',$token)}}">Click here to verify order</a>
    </button>
    
</body>
</html>