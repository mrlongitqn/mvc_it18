<h1>Danh sách danh mục</h1>
<a href="index.php?c=Category&a=Add">Thêm danh mục</a>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Desc</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ($data as $value) {
        ?>
        <tr>
            <td><?= $value[0] ?></td>
            <td><?= $value[1] ?></td>
            <td><?= $value[2] ?></td>
            <td>
                <a href="index.php?c=Category&a=Edit&id=<?=$value[0]?>">Edit</a> |
                <a href="index.php?c=Category&a=Delete&id=<?=$value[0]?>">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>