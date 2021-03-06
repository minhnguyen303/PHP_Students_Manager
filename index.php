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
    <caption><h1><u>Danh sách học sinh</u></h1></caption>
    <tr>
        <td colspan="6" id="colSearch">
            <form action="index.php" method="post">
                <label for="inputSearch">Search: </label>
                <input id="inputSearch" name="search" placeholder="Tên học sinh cần tìm kiếm">
                <button type="submit">Search</button>
            </form>
        </td>
        <td colspan="2">
            <a href="Add_Page.php">
                <button>Thêm học sinh</button>
            </a>
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
    <script>
        function clickSubmit(id) {
            let confirm = window.confirm("Do you really want to delete it !?!?!?");
            if (confirm == true) {
                document.getElementById("btnSubmitDelete" + id).click();
            }
        }
    </script>
    <?php include_once 'Manager.php';?>
    <?php include_once 'Action_Page.php';?>
    <?php if (Manager::$students == null):?>
        <tr>
            <td colspan="7" style="text-align: center"><h3><i>Không có dữ liệu</i></h3></td>
        </tr>
    <?php else:?>
        <?php foreach (Manager::$students as $key=>$student):?>
            <tr>
                <td><?php echo $key?></td>
                <td><?php echo $student->getName()?></td>
                <td><?php echo $student->getGender()?></td>
                <td><?php echo $student->getBirth()?></td>
                <td><?php echo $student->getCode()?></td>
                <td><?php echo $student->getSubject()?></td>
                <td><?php echo $student->getFrom()?></td>
                <td>
                    <form action="Edit_Page.php" method="post" style="display: inline">
                        <input type="text" name="index" value="<?php echo $key?>" hidden="hidden">
                        <button type="submit">Sửa</button>
                    </form>
                    <form action="Action_Page.php" method="post" style="display: inline">
                        <input id="inputActionEdit<?php echo $key?>" type="text" name="action" value="delete" hidden="hidden">
                        <input type="text" name="index" value="<?php echo $key?>" hidden="hidden">
                        <button id="btnSubmitDelete<?php echo $key?>" hidden="hidden" type="submit"></button>
                        <button type="button" onclick="clickSubmit('<?php echo $key?>')">Xóa</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    <?php endif;?>
</table>
</body>
</html>
<?php
