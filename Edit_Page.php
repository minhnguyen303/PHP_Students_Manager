<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa thông tin sinh viên</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Sửa thông tin sinh viên</legend>
        Tên: <input type="text">
        Giới tính:
        <select name="gender">
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        Ngày sinh: <input type="date" name="birth" value="2020-12-20">
        Ngành học:
        <select name="subject">
            <option value="CNTT">CNTT</option>
            <option value="CNTT">Điện</option>
            <option value="CNTT">Chế biến thực phẩm</option>
            <option value="CNTT">Kinh doanh</option>
        </select>
        Quê quán: <input type="text">
        <button type="submit">Lưu</button>
        <a href="index.php"><button type="button">Hủy</button></a>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $test = $_POST['birth'];
    echo $test;
}