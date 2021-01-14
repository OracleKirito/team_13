@extends('app')

@section('title', '編輯特定紀錄')

@section('stored_theme', '編輯中的購買紀錄')

@section('stored_contents')
    @include('message.list')
    {!! Form::model($record, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PurchaseRecordController@update', $record->id]]) !!}
    @include('purchase_records.form', ['submitButtonText'=>"更新紀錄資料"])
    {!! Form::close() !!}
@endsection
