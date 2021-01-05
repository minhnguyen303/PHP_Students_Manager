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
<form action="Action_Page.php" method="post">
    <input type="text" name="action" value="create" hidden="hidden">
    <fieldset>
        <legend>Thêm sinh viên</legend>
        Tên: <input type="text" name="name">
        Giới tính:
        <select name="gender">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        Ngày sinh: <input type="date" name="birth">
        Ngành học:
        <select name="subject">
            <option value="PHP">PHP</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
        </select>
        Quê quán: <input type="text" name="from">
        <button type="submit">Thêm</button>
        <a href="index.php"><button type="button">Hủy</button></a>
    </fieldset>
</form>
</body>
</html>
<?php
