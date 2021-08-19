<h1>Danh sách danh mục</h1>
<a href="index.php?c=Post&a=Add">Thêm bài viết</a>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>Id</th>
        <th>Hình Ảnh</th>
        <th>Tiêu đề</th>
        <td>Danh mục</td>
        <th>Hành động</th>
    </tr>
    <?php
    foreach ($data as $value) {
        ?>
        <tr>
            <td><?= $value[0] ?></td>
            <td><?= $value[1] ?></td>
            <td><?= $value[2] ?></td>
            <td><?= $value[3] ?></td>
            <td>
                <a href="index.php?c=Category&a=Edit&id=<?=$value[0]?>">Edit</a> |
                <a href="index.php?c=Category&a=Delete&id=<?=$value[0]?>">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>