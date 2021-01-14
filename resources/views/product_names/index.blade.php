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
    <a href="{{ route('product_create') }} ">新增商品</a>
    <form action="{{ url('/product/arc' )}}" method="post">
        <input class="btn btn-default" type="submit" value="價格排序" />
        @csrf
    </form>
</div>
<table >
    <tr>
        <th>編號</th>
        <th>主機平台</th>
        <th>商品名稱</th>
        <th>價格</th>
        <th>出貨商</th>
        <th>商品庫存</th>

    </tr>
    @foreach($products as $product)

        <tr style="color:red;">
            <td>{{$product->id }}</td>
            <td>{{ $product->platform}}</td>
            <td>{{ $product->p_name }}</td>
            <td>{{$product->price}}</td>
            <td>{{ $product->companys['c_name']}}</td>
            <td>{{ $product->inventory}}</td>
            <td><a href="{{ route('product_show', ['id'=>$product->id]) }}">顯示</a></td>
            <td><a href="{{ route('product_edit', ['id'=>$product->id]) }}">修改</a></td>
            <td>
            <form action="{{ url('/product/delete', ['id' => $product->id]) }}" method="post">
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
