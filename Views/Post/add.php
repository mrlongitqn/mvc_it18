<?php
require_once(SYSTEM_PATH.'/Views/header.php');
?>
<div class="row">
    <div class="col-md-12">
        <form action="index.php?c=Post&a=SaveAdd" method="POST">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Thêm bài viết</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Tên bài viết</label>
                        <input name="title" type="text" class="form-control" id="name" placeholder="Nhập tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Danh mục</label>
                        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                            <?php
                            foreach ($categories as $category){
                                ?>
                                <option value="<?=$category[0]?>"><?=$category[1]?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc">Chi tiết</label>
                     <textarea  class="form-control" rows="10" name="detail"></textarea>
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
<h1>Thêm bài viết mới</h1>
<form action="index.php?c=Post&a=SaveAdd" method="POST">
    <table>
        <tr>
            <td>Danh mục</td>
            <td>
                <select name="category_id">
                    <?php
                    foreach ($categories as $category){
                        ?>
                        <option value="<?=$category[0]?>"><?=$category[1]?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tiêu đề</td>
            <td><input type="text" name="title"></td>
        </tr>


        <tr>
            <td>Nội dung</td>
            <td>
                <textarea name="detail" rows="6" style="width: 100%">

                </textarea>

            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="save">
            </td> <td>
                <input type="reset" value="reset">
            </td>
        </tr>
    </table>
</form>
