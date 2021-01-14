@extends('app')
@section('title','會員訊息')
@section('stored_theme', '會員資料')
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
    <a href="{{ route('member_create') }} ">新增會員</a>
</div>
<table >
<tr>
    <th>編號</th>
    <th>會員名稱</th>
    <th>生日</th>
    <th>帳號</th>
    <th>密碼</th>
    <th>餘額</th>
</tr>
@foreach($stored1 as $stored)
       <tr style="color: red"; >
            <td>{{ $stored->id }}</td>
            <td>{{ $stored->a_name }}</td>
            <td>{{ $stored->birth }}</td>
            <td>{{$stored->account }}</td>
           <td>{{$stored->password}}</td>
            <td>{{ $stored->balance }}</td>
            <td><a href="{{route('member_show',['id'=>$stored->id])}}">顯示</a></td>
            <td><a href="{{route('member_edit',['id'=>$stored->id])}}">修改</a></td>
           <td>
               <form action="{{ url('/member/record', ['a_id' => $stored->id]) }}" method="post">
                   <input type="hidden" name='a_id' value= {{$stored->id}} />
                   <input class="btn btn-default" type="submit" value="查詢" />
                   @csrf
               </form>
           </td>
           <td>
               <form action="{{ url('/member/delete', ['id' => $stored->id]) }}" method="post">
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
