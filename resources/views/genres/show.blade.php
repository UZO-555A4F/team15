<html>
<head>
    <meta charset="UTF-8">
    <title>顯示單筆餐點類型詳細資料</title>
</head>
<body>
    <h1>顯示單筆餐點類型詳細資料</h1>
    <a href="{{ route('genres.index') }}">所有餐點類型</a>
    <table border="1">
        <tr>
            <th>編號</th>
            <td>{{ $genre->id }}</td>
        </tr>
        <tr>
            <th>餐點類型</th>
            <td>{{ $genre->genre }}</td>
        </tr>
    </table>

    <h1>{{ $genre->genre }}餐點類型的所有餐應(共{{ count($genre->restaurants) }}間)</h1>
    <table border="1">
        <tr>
            <th>編號</th>
            <th>名稱</th>
            <th>地址</th>
            <th>餐點類型</th>
            <th>價格等級</th>
            <th>電話</th>
        </tr>
        @foreach($genre->restaurants as $restaurant)
            <tr>
                <td>{{ $restaurant->id }}</td>
                <td>{{ $restaurant->name }}</td>
                <td>{{ $restaurant->address }}</td>
                <td>{{ $restaurant->gid }}</td>
                <td>{{ $restaurant->pid }}</td>
                <td>{{ $restaurant->telephone }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>