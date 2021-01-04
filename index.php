<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Manager</title>
</head>
<body>
<table>
    <caption><h1>Danh sách học sinh</h1></caption>
    <tr>
        <td colspan="8" id="colSearch">
            <form action="" method="get" id="formSearch">
                <label for="inputSearch">Search: </label>
                <input id="inputSearch" name="search" placeholder="Tên học sinh cần tìm kiếm">
                <button type="submit">Search</button>
            </form>
        </td>
    </tr>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Mã sinh viên</th>
        <th>Ngành học</th>
        <th>Quê quán</th>
        <th></th>
    </tr>
</table>
</body>
</html>
<?php
