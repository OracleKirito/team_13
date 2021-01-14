@extends('app')
@section('title','會員訊息')
@section('stored_theme', '查詢會員資料')
@section('stored_contents')


    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>檢視查詢會員</div>
<br>
索引:{{$member->id}}<br>
姓名:{{$member->a_name}}<br>
生日:{{$member->birth}}<br>
使用者帳號:{{$member->account}}<br>
餘額:{{$member->balance}}

</body>
</html>
@endsection
