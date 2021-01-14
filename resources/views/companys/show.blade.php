@extends('app')
@section('title','公司訊息')
@section('stored_theme', '查詢單筆公司資料')
@section('stored_contents')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>檢視查詢公司</div>
<br>
索引:{{$company->id}}<br>
公司名稱:{{$company['c_name']}}<br>
廠商聯絡人 :{{$company->c_manager}}<br>
廠商電話:{{$company->c_phone}}<br>
廠商營業地址 :{{$company->c_address}}

</body>
</html>
@endsection
