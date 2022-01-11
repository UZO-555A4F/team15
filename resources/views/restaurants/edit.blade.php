@extends('app')

@section('title', '修改單筆餐廳詳細資料')

@section('guide_contents')
    <body>
        <h1>修改單筆餐廳詳細資料</h1>
{{--        <a href="{{ route('restaurants.index') }}">所有餐廳</a>--}}
        <form action="/restaurants/{{ $restaurant->id }}" method="POST">
            @csrf
            @method('put')
            <table border="1">
                <tr>
                    <th>名稱</th>
                    <td><input type="text" name="name" value="{{ $restaurant->name }}" required></td>
                </tr>
                <tr>
                    <th>地址</th>
                    <td><input type="text" name="address" value="{{ $restaurant->address }}" required></td>
                </tr>
                <tr>
                    <th>餐點類型</th>
                    <td><input type="text" name="gid" value="{{ $restaurant->gid }}" required></td>
                </tr>
                <tr>
                    <th>價格等級</th>
                    <td><input type="text" name="pid" value="{{ $restaurant->pid }}" required></td>
                </tr>
                <tr>
                    <th>電話</th>
                    <td><input type="tel" name="telephone" value="{{ $restaurant->telephone }}" placeholder="0XXXXXXXXX" minlength="10" maxlength="10"></td>
                </tr>
            </table>
            <input type="submit" value="修改">
            <input type="reset" value="重新輸入">
        </form>
    </body>
@endsection
