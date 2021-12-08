<html>
<head>
    <meta charset="UTF-8">
    <title>顯示所有餐廳資料</title>
</head>
<body>
<h1>顯示所有餐廳資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>餐點類型</th>
        <th>價格等級</th>
        <th>操作</th>
    </tr>
    @foreach($restaurants as $restaurant)
        <tr>
            <td>{{ $restaurant->id }}</td>
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->gid }}</td>
            <td>{{ $restaurant->pid }}</td>
            <td>
                <a href="restaurants/{{ $restaurant->id }}">
                    詳細
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>