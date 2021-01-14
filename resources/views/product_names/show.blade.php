@extends('app')
@section('title','商品訊息')
@section('stored_theme', '建立商品資料')
@section('stored_contents')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>檢視查詢商品</div>
<br>
索引:{{$product['id']}}<br>
主機平台:{{$product['platform']}}<br>
商品名稱:{{$product['p_name']}}<br>
商品價格:{{$product['price']}}<br>
出貨商:{{$product['company']}}<br>
庫存:{{$product['inventory']}}<br>


</body>
</html>
@endsection
