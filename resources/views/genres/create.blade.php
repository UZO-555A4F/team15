<html>
<head>
    <meta charset="UTF-8">
    <title>新增餐點類型資料表單</title>
</head>
<body>
    <h1>新增餐點類型資料表單</h1>
    <form action="/genres" method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>餐點類型</th>
                <td><input type="text" name="genre"></td>
            </tr>
        </table>
        <input type="submit" value="新增">
        <input type="reset" value="重新輸入">
    </form>
</body>
</html>