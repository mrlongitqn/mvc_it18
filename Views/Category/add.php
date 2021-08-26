<?php
require_once(SYSTEM_PATH.'/Views/header.php');
?>
<div class="row">
    <div class="col-md-12">
        <form action="index.php?c=Category&a=SaveAdd" method="POST">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Thêm danh mục</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tên danh mục</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nhập tên danh mục">
                </div>
                <div class="form-group">
                    <label for="desc">Mô tả</label>
                    <input type="text" class="form-control" id="desc" name="desc" placeholder="Nhập mô tả">
                </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Lưu Lại</button>
                <button type="reset" class="btn btn-danger">Gõ lại</button>
            </div>
        </div>
    </div>
        </form>
</div>
<?php
require_once(SYSTEM_PATH.'/Views/footer.php');
?>