<html>
<head>
    <meta charset="UTF-8">
    <title>修改單筆價格等級詳細資料</title>
</head>
<body>
    <h1>修改單筆價格等級資料</h1>
    <form action="/price_levels/{{ $price_level->id }}" method="POST">
        @csrf
        @method('put')
        <table border="1">
            <tr>
                <th>編號</th>
                <td>{{ $price_level->id }}</td>
            </tr>
            <tr>
                <th>價格等級</th>
                <td><input type="text" name="price_level" value="{{ $price_level->price_level }}"></td>
            </tr>
        </table>
        <input type="submit" value="修改">
        <input type="reset" value="重新輸入">
    </form>
</body>
</html>