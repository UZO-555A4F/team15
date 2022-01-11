@extends('app')

@section('title', '顯示所有餐點類型資料')

@section('guide_contents')
    <body>
        <h1>顯示所有餐點類型資料</h1>
        <a href="{{ route('genres.create') }}">新增餐點類型</a>
        <table border="1">
            <tr>
                <th>餐點類型</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>
            @foreach($genres as $genre)
                <tr>
                    <td>{{ $genre->genre }}</td>
                    <td><a href="{{ route('genres.show', ['genre'=>$genre->id]) }}">詳細</a></td>
                    <td><a href="{{ route('genres.edit', ['genre'=>$genre->id]) }}">修改</a></td>
                    <td>
                        <form action="/genres/{{ $genre->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="刪除">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
@endsection
