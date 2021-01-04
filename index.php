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
                    <form action="Action_Page.php" method="post">
                        <input id="inputActionEdit" type="text" name="action" value="edit" hidden="hidden">
                        <script>
                            function clickSubmit(action) {
                                if (action === 'edit'){
                                    document.getElementById('inputActionEdit').value = 'edit';
                                }
                                else {
                                    document.getElementById('inputActionEdit').value = 'delete';
                                }
                                document.getElementById('btnSubmitEdit').click();
                            }
                        </script>
                        <button id="btnSubmitEdit" hidden="hidden" type="submit"></button>
                        <button type="button" onclick="clickSubmit('edit')">Sửa</button>
                        <button type="button" onclick="clickSubmit('delete')">Xóa</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    <?php endif;?>
</table>
</body>
</html>
<?php
