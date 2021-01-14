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
welcome!!
<br>
@include('message.list')
{!!Form::open(['url' => 'product/store']) !!}
@include('product_names.form', ['submitButtonText'=>"建立"])
{!! Form::close() !!}
</body>
</html>
@endsection
