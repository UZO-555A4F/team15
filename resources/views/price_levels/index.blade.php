<html>
<head>
    <meta charset="UTF-8">
    <title>顯示所有價格等級資料</title>
</head>
<body>
<h1>顯示所有價格等級資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>價格等級</th>
        <th>操作</th>
    </tr>
    @foreach($price_levels as $price_level)
        <tr>
            <td>{{ $price_level->id }}</td>
            <td>{{ $price_level->price_level }}</td>
            <td>
                <a href="price_levels/{{ $price_level->id }}">
                    詳細
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>