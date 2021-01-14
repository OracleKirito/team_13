@extends('app')
@section('title','公司訊息')
@section('stored_theme', '公司資料')
@section('stored_contents')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table,th,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div>
    <a href="{{ route('company_create') }} ">新增公司</a>
</div>
<table >
    <tr>
        <th>編號</th>
        <th>廠商名稱</th>
        <th>廠商聯絡人</th>
        <th>廠商電話</th>
        <th>廠商營業地址</th>

    </tr>
    @foreach($companys as $company)

        <tr style="color:red;">
            <td>{{$company->id }}</td>
            <td>{{ $company->c_name}}</td>
            <td>{{ $company->c_manager }}</td>
            <td>{{$company->c_phone }}</td>
            <td>{{ $company->c_address }}</td>
            <td><a href="{{ route('company_show', ['id'=>$company->id]) }}">顯示</a></td>
            <td><a href="{{ route('company_edit', ['id'=>$company->id]) }}">修改</a></td>
            <td>
                <form action="{{ url('/company/product', ['company' => $company->id]) }}" method="post">
                    <input type="hidden" name='company' value= {{$company->id}} />
                    <input class="btn btn-default" type="submit" value="查詢" />
                    @csrf
                </form>
            </td>
            <td>
            <form action="{{ url('/company/delete', ['id' => $company->id]) }}" method="post">
                <input class="btn btn-default" type="submit" value="刪除" />
                @method('delete')
                @csrf
            </form>
            </td>
        </tr>

    @endforeach
</table>
</body>
</html>
@endsection
