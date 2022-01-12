@extends('app')

@section('title', '顯示單筆餐廳詳細資料')

@section('guide_contents')
    <body>
        <h1>顯示單筆餐廳詳細資料</h1>
{{--        <a href="{{ route('restaurants.index') }}">所有餐廳</a>--}}
        <table border="1">
            <tr>
                <th>名稱</th>
                <td>{{ $restaurant->name }}</td>
            </tr>
            <tr>
                <th>地址</th>
                <td>{{ $restaurant->address }}</td>
            </tr>
            <tr>
                <th>餐點類型</th>
                <td>{{ $restaurant->genre->genre }}</td>
            </tr>
            <tr>
                <th>價格等級</th>
                <td>{{ $restaurant->price_level->price_level }}</td>
            </tr>
            <tr>
                <th>電話</th>
                <td>{{ $restaurant->telephone }}</td>
            </tr>
        </table>
    </body>
@endsection
