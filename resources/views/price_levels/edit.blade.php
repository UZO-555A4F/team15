@extends('app')

@section('title', '修改單筆價格等級資料')

@section('guide_contents')
    <body>
        <h1>修改單筆價格等級資料</h1>
{{--        <a href="{{ route('price_levels.index') }}">所有價格等級</a>--}}
        <form action="/price_levels/{{ $price_level->id }}" method="POST">
            @csrf
            @method('put')
            <table border="1">
                <tr>
                    <th>價格等級</th>
                    <td><input type="text" name="price_level" value="{{ $price_level->price_level }}" required></td>
                </tr>
            </table>
            <input type="submit" value="修改">
            <input type="reset" value="重新輸入">
        </form>
    </body>
@endsection
