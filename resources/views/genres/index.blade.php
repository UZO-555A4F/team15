<html>
<head>
    <meta charset="UTF-8">
    <title>顯示所有餐廳類型資料</title>
</head>
<body>
<h1>顯示所有餐廳類型資料 </h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>餐廳類型</th>
        <th>操作</th>
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
        </tr>
    @endforeach
</table>
</body>
</html>