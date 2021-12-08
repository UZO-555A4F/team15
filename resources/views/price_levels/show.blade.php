<html>
<head>
    <meta charset="UTF-8">
    <title>顯示單筆價格等級詳細資料</title>
</head>
<body>
<h1>顯示單筆價格等級資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <td>{{ $price_level->id }}</td>
    </tr>
    <tr>
        <th>價格等級</th>
        <td>{{ $price_level->price_level }}</td>
    </tr>
</table>
</body>
</html>