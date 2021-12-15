<html>
<head>
    <meta charset="UTF-8">
    <title>修改單筆餐點類型詳細資料</title>
</head>
<body>
    <h1>修改單筆餐點類型詳細資料</h1>
    <form action="genres/{{ $genre->id }}" method="POST">
        @csrf
        @method('put')
        <table border="1">
            <tr>
                <th>編號</th>
                <td>{{ $genre->id }}</td>
            </tr>
            <tr>
                <th>餐點類型</th>
                <td><input type="text" name="genre" value="{{ $genre->genre }}"></td>
            </tr>
        </table>
        <input type="submit" value="修改">
        <input type="reset" value="重新輸入">
    </form>
</body>
</html>