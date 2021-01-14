@extends('app')
@section('title','公司訊息')
@section('stored_theme', '建立公司資料')
@section('stored_contents')


    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<br>
@include('message.list')
{!!Form::open(['url' => 'company/store']) !!}
@include('companys.form', ['submitButtonText'=>"建立"])
{!! Form::close() !!}
</body>
</html>
@endsection
