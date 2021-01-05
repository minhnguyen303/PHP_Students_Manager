<?php
include_once 'Manager.php';
?>
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
<form action="Action_Page.php" method="post">
    <input type="text" name="action" value="update" hidden="hidden">
    <input id="index" type="text" name="index" hidden="hidden">
    <fieldset>
        <legend>Sửa thông tin sinh viên</legend>
        Tên: <input id="name" type="text" name="name">
        Giới tính:
        <select id="gender" name="gender">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        Ngày sinh: <input id="birth" type="date" name="birth"><!--value="2020-12-20"-->
        Ngành học:
        <select id="subject" name="subject">
            <option value="PHP">PHP</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
        </select>
        Quê quán: <input id="from" type="text" name="from">
        <button type="submit">Lưu</button>
        <a href="index.php"><button type="button">Hủy</button></a>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $index = $_POST['index'];

    $manager = new Manager();
    $student = $manager->get($index);

    $name = $student->getName();
    $gender = $student->getGender();
    $birth = $student->getBirth();
    $code = $student->getCode();
    $subject = $student->getSubject();
    $from = $student->getFrom();

    $script = "<script>
            document.getElementById('index').value = '$index';
            document.getElementById('name').value = '$name';
            document.getElementById('gender').value = '$gender';
            document.getElementById('birth').value = '$birth';
            document.getElementById('subject').value = '$subject';
            document.getElementById('from').value = '$from';
        </script>";
    echo $script;
}