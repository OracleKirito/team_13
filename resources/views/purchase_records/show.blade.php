@extends('app')
@section('title','商品紀錄訊息')
@section('stored_theme', '查詢商品紀錄資料')
@section('stored_contents')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>檢視查詢儲值紀錄</div>
<br>
索引:{{$record['id']}}<br>
訂單編號:{{$record['b_number']}}<br>
購買日期:{{$record['b_date']}}<br>
序號:{{$record['serial_number']}}<br>
會員編號:{{$record['a_id']}}<br>
商品索引:{{$record['p_id']}}<br>

</body>
</html>
@endsection
