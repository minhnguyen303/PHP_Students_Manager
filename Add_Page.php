<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Thêm sinh viên</legend>
         Tên: <input type="text">
         Giới tính:
        <select name="gender">
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
         Ngày sinh: <input type="date">
         Ngành học: <input type="text">
         Quê quán: <input type="text">
        <button type="submit">Tạo</button>
    </fieldset>
</form>
</body>
</html>
<?php
