<?php
require_once(SYSTEM_PATH.'/Views/header.php');
?>

    <h4 class="page-title">Quản lý danh mục</h4>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Danh sách danh mục
                    <a class="btn btn-warning btn-round float-right" href="index.php?c=Category&a=Add">Thêm danh mục</a></div>
            </div>
            <div class="card-body">
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($data as $value) {
                        ?>
                        <tr>
                            <td><?= $value[0] ?></td>
                            <td><?= $value[1] ?></td>
                            <td><?= $value[2] ?></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="index.php?c=Category&a=Edit&id=<?=$value[0]?>"><i class="la la-edit"></i> Sửa</a>
                                <a class="btn btn-danger btn-xs" href="index.php?c=Category&a=Delete&id=<?=$value[0]?>"><i class="
la la-times-circle"></i> Xóa</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require_once(SYSTEM_PATH.'/Views/footer.php');
?>