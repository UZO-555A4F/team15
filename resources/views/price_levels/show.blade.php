@extends('app')

@section('title', '顯示單筆價格等級詳細資料')

@section('guide_contents')
    <body>
{{--        <h1>顯示單筆價格等級詳細資料</h1>--}}
{{--        <a href="{{ route('price_levels.index') }}">所有價格等級</a>--}}
{{--        <table border="1">--}}
{{--            <tr>--}}
{{--                <th>價格等級</th>--}}
{{--                <td>{{ $price_level->price_level }}</td>--}}
{{--            </tr>--}}
{{--        </table>--}}

        <h1>{{ $price_level->price_level }}價格等級的所有餐應(共{{ count($price_level->restaurants) }}間)</h1>
        <table border="1">
            <tr>
                <th>名稱</th>
                <th>地址</th>
                <th>餐點類型</th>
                <th>電話</th>
            </tr>
            @foreach($price_level->restaurants as $restaurant)
                <tr>
                    <td>{{ $restaurant->name }}</td>
                    <td>{{ $restaurant->address }}</td>
                    <td>{{ $restaurant->genre->genre }}</td>
                    <td>{{ $restaurant->telephone }}</td>
                </tr>
            @endforeach
        </table>
    </body>
@endsection
