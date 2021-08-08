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
    foreach ($result as $value) {
        ?>
        <tr>
            <td><?= $value->id ?></td>
            <td><?= $value->name ?></td>
            <td><?= $value->desc ?></td>
            <td>
                <a href="index.php?c=Category&a=Edit&id=<?=$value->id?>">Edit</a>
            </td>
        </tr>
        <?
    }
    ?>
</table>