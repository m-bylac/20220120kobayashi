@extends('layouts.default')
<style>
  th {
      color: black;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      text-align: center;
    }
</style>
@section('title', 'auth.blade.php')

@section('content')
<p>{{$text}}</p>
<form action="/auth" method="post">
<table>
    @csrf
    <tr><th>メール: </th><td><input type="text"
        name="email"></td></tr>
    <tr><th>パスワード: </th><td><input type="password"
        name="password"></td></tr>
    <tr><th></th><td><input type="submit"
    value="送信"></td></tr>
</table>
</form>
@endsection

@section('thanks.blade.php')
<h2>お問い合わせ完了ページ</h2>
@endsection