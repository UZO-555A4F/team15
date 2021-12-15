<html>
<head>
    <meta charset="UTF-8">
    <title>顯示所有餐點類型資料</title>
</head>
<body>
<h1>顯示所有餐點類型資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>餐點類型</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($genres as $genre)
        <tr>
            <td>{{ $genre->id }}</td>
            <td>{{ $genre->genre }}</td>
            <td>
                <a href="genres/{{ $genre->id }}">
                    詳細
                </a>
            </td>
            <td>
                <a href="genres/{{ $genre->id }}/edit">
                    修改
                </a>
            </td>
            <td>
                <form action="genres/{{ $genre->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="刪除">
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>