@extends('app')
@section('title','會員訊息')
@section('stored_theme', '建立會員資料')
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
{!!Form::open(['url' => 'member/store']) !!}
@include('members.form', ['submitButtonText'=>"建立"])
{!! Form::close() !!}
</body>
</html>
@endsection
