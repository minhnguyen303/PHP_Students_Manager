<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sinh viên</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Thêm sinh viên</legend>
        Tên: <input type="text" name="name">
        Giới tính:
        <select name="gender">
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        Ngày sinh: <input type="date" name="birth">
        Ngành học:
        <select name="subject">
            <option value="CNTT">CNTT</option>
            <option value="Điện">Điện</option>
            <option value="Chế biến thực phẩm">Chế biến thực phẩm</option>
            <option value="Kinh doanh">Kinh doanh</option>
        </select>
        Quê quán: <input type="text" name="from">
        <button type="submit">Tạo</button>
        <a href="index.php"><button type="button">Hủy</button></a>
    </fieldset>
</form>
</body>
</html>
<?php
