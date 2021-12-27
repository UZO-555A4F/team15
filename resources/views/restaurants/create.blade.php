<html>
<head>
    <meta charset="UTF-8">
    <title>新增餐廳資料表單</title>
</head>
<body>
    <h1>新增餐廳資料表單</h1>
    <a href="{{ route('restaurants.index') }}">所有餐廳</a>
    <form action="/restaurants" method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>名稱</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>地址</th>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <th>餐點類型</th>
                <td><input type="text" name="gid" required></td>
            </tr>
            <tr>
                <th>價格等級</th>
                <td><input type="text" name="pid" required></td>
            </tr>
            <tr>
                <th>電話</th>
                <td><input type="tel" name="telephone" placeholder="0XXXXXXXXX" minlength="10" maxlength="10"></td>
            </tr>
        </table>
        <input type="submit" value="新增">
        <input type="reset" value="重新輸入">
    </form>
</body>
</html>