@extends('app')

@section('title', '顯示所有餐廳資料')

@section('guide_contents')
    <h1>顯示所有餐廳資料</h1>
    <a href="{{ route('restaurants.create') }}">新增餐廳</a>
    <table border="1">
        <tr>
            <th>名稱</th>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <th>名稱</th>
            <th>餐點類型</th>
            <th>價格等級</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
        </tr>
        @foreach($restaurants as $restaurant)
            <tr>
                <td>{{ $restaurant->name }}</td>
                <td>{{ $restaurant->genre->genre }}</td>
                <td>{{ $restaurant->price_level->price_level }}</td>
                <td><a href="{{ route('restaurants.show', ['restaurant'=>$restaurant->id]) }}">詳細</a></td>
                <td><a href="{{ route('restaurants.edit', ['restaurant'=>$restaurant->id]) }}">修改</a></td>
                <td>
                    <form action="/restaurants/{{ $restaurant->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
