<html>
<head>
    <meta charset="UTF-8">
    <title>修改單筆餐廳詳細資料</title>
</head>
<body>
    <h1>修改單筆餐廳詳細資料</h1>
    <form action="/restaurants/{{ $restaurant->id }}" method="POST">
        @csrf
        @method('put')
        <table border="1">
            <tr>
                <th>編號</th>
                <td>{{ $restaurant->id }}</td>
            </tr>
            <tr>
                <th>名稱</th>
                <td><input type="text" name="name" value="{{ $restaurant->name }}"></td>
            </tr>
            <tr>
                <th>地址</th>
                <td><input type="text" name="address" value="{{ $restaurant->address }}"></td>
            </tr>
            <tr>
                <th>餐點類型</th>
                <td><input type="text" name="gid" value="{{ $restaurant->gid }}"></td>
            </tr>
            <tr>
                <th>價格等級</th>
                <td><input type="text" name="pid" value="{{ $restaurant->pid }}"></td>
            </tr>
            <tr>
                <th>電話</th>
                <td><input type="text" name="telephone" value="{{ $restaurant->telephone }}"></td>
            </tr>
        </table>
        <input type="submit" value="修改">
        <input type="reset" value="重新輸入">
    </form>
</body>
</html>