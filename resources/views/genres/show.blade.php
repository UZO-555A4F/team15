<html>
<head>
    <meta charset="UTF-8">
    <title>顯示單筆餐點類型詳細資料</title>
</head>
<body>
<h1>顯示單筆餐點類型詳細資料</h1>
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
</body>
</html>