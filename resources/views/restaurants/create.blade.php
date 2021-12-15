<html>
<head>
    <meta charset="UTF-8">
    <title>新增餐廳資料表單</title>
</head>
<body>
    <h1>新增餐廳資料表單</h1>
    <form action="/restaurants" method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>名稱</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>地址</th>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <th>餐點類型</th>
                <td><input type="text" name="gid"></td>
            </tr>
            <tr>
                <th>價格等級</th>
                <td><input type="text" name="pid"></td>
            </tr>
            <tr>
                <th>電話</th>
                <td><input type="text" name="telephone"></td>
            </tr>
        </table>
        <input type="submit" value="新增">
        <input type="reset" value="重新輸入">
    </form>
</body>
</html>