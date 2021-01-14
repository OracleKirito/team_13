@extends('app')
@section('title','紀錄訊息')
@section('stored_theme', '購買紀錄')
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
    <a href="{{ route('purchase_create') }} ">新增紀錄</a>
    <form action="{{ url('/purchase/arc' )}}" method="post">
        <input class="btn btn-default" type="submit" value="會員排序" />
        @csrf
    </form>
</div>
<table>

    <tr>
        <th>編號</th>
        <th>訂單編號</th>
        <th>購買日期</th>
        <th>序號</th>
        <th>會員</th>
        <th>商品</th>
    </tr>
    @foreach($records as $record)

        <tr style="color:red;">
            <td>{{$record->id }}</td>
            <td>{{ $record->b_number }}</td>
            <td>{{ $record->b_date }}</td>
            <td>{{$record->serial_number }}</td>
            <td>{{ $record->member['a_name']}}</td>
            <td>{{ $record->product['p_name']}}</td>
            <td><a href="{{ route('purchase_show', ['id'=>$record->id]) }}">顯示</a></td>
            <td><a href="{{ route('purchase_edit', ['id'=>$record->id]) }}">修改</a></td>
            <td>
                <form action="{{ url('/purchase/delete', ['id' => $record->id]) }}" method="post">
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
