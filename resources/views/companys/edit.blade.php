@extends('app')

@section('title', '編輯特定公司')

@section('stored_theme', '編輯中的公司')

@section('stored_contents')
    @include('message.list')
    {!! Form::model($company, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CompanyController@update', $company->id]]) !!}
    @include('companys.form', ['submitButtonText'=>"更新公司資料"])
    {!! Form::close() !!}
@endsection
