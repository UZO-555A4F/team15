@extends('app')

@section('title', '新增餐點類型資料表單')

@section('guide_contents')
    <body>
        <h1>新增餐點類型資料表單</h1>
{{--        <a href="{{ route('genres.index') }}">所有餐點類型</a>--}}
        <form action="/genres" method="POST">
            @csrf
            <table border="1">
                <tr>
                    <th>餐點類型</th>
                    <td><input type="text" name="genre" required></td>
                </tr>
            </table>
            <input type="submit" value="新增">
            <input type="reset" value="重新輸入">
        </form>
    </body>
@endsection
