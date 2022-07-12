<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> <h1> RESTAURANT YUMYUM </h1> </center>  

    Hi pesanan anda : <b>{{$a}}</b>

    @if($a == 'Ayam goreng')
    <br>
        harga {{$a}} Rp.15000 
    @elseif ($a == 'Lobster')
    <br>
        harga {{$a}} Rp.20000
    @elseif ($a == 'Pizza')
    <br>
        harga {{$a}} Rp.50000
    @elseif ($a == 'Tiramisu')
    <br>
        harga {{$a}} Rp.30000
    @elseif ($a == 'Pasta')
    <br>
        harga {{$a}} Rp.25000
    
    @else
        list harga tidak ada
    @endif
    <!-- pesanan anda adalah : {{$a}} -->
</body>
</html>