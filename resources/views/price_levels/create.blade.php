@extends('app')

@section('title', '新增價格等級資料表單')

@section('guide_contents')
    <body>
        <h1>新增價格等級資料表單</h1>
{{--        <a href="{{ route('price_levels.index') }}">所有價格等級</a>--}}
        <form action="/price_levels" method="POST">
            @csrf
            <table border="1">
                <tr>
                    <th>價格等級</th>
                    <td><input type="text" name="price_level" required></td>
                </tr>
            </table>
            <input type="submit" value="新增">
            <input type="reset" value="重新輸入">
        </form>
    </body>
@endsection
