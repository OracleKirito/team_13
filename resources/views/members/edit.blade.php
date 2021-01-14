@extends('app')

@section('title', '編輯特定會員')

@section('stored_theme', '編輯中的會員')

@section('stored_contents')
    @include('message.list')
    {!! Form::model($member, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\MemberController@update', $member->id]]) !!}
    @include('members.form', ['submitButtonText'=>"更新會員資料"])
    {!! Form::close() !!}
@endsection
