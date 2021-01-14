@extends('app')

@section('title', '編輯特定會員')

@section('stored_theme', '編輯中的會員')

@section('stored_contents')
    @include('message.list')
    {!! Form::model($product, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\ProductNameController@update', $product->id]]) !!}
    @include('product_names.form', ['submitButtonText'=>"更新會員資料"])
    {!! Form::close() !!}
@endsection
