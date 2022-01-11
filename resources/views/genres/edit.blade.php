@extends('app')

@section('title', '修改單筆餐點類型詳細資料')

@section('guide_contents')
    <body>
        <h1>修改單筆餐點類型詳細資料</h1>
{{--        <a href="{{ route('genres.index') }}">所有餐點類型</a>--}}
        <form action="/genres/{{ $genre->id }}" method="POST">
            @csrf
            @method('put')
            <table border="1">
                <tr>
                    <th>餐點類型</th>
                    <td><input type="text" name="genre" value="{{ $genre->genre }}" required></td>
                </tr>
            </table>
            <input type="submit" value="修改">
            <input type="reset" value="重新輸入">
        </form>
    </body>
@endsection
