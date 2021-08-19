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
