@extends('app')
@section('title','商品紀錄訊息')
@section('stored_theme', '建立商品紀錄資料')
@section('stored_contents')


    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<br>
@include('message.list')
{!!Form::open(['url' => 'purchase/store']) !!}
@include('purchase_records.form', ['submitButtonText'=>"建立"])
{!! Form::close() !!}
</body>
</html>
@endsection
