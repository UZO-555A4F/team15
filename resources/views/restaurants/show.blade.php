<html>
<head>
    <meta charset="UTF-8">
    <title>顯示單筆餐廳詳細資料</title>
</head>
<body>
<h1>顯示單筆餐廳詳細資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <td>{{ $restaurant->id }}</td>
    </tr>
    <tr>
        <th>名稱</th>
        <td>{{ $restaurant->name }}</td>
    </tr>
    <tr>
        <th>地址</th>
        <td>{{ $restaurant->address }}</td>
    </tr>
    <tr>
        <th>餐點類型</th>
        <td>{{ $restaurant->gid }}</td>
    </tr>
    <tr>
        <th>價格等級</th>
        <td>{{ $restaurant->pid }}</td>
    </tr>
    <tr>
        <th>電話</th>
        <td>{{ $restaurant->telephone }}</td>
    </tr>
</table>
</body>
</html>