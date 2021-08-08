<form>
    <table>
        <tr>
            <td>Id</td>
            <td><input type="number" name="id" readonly value="<?=$category->id?>"></td>
        </tr> <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?=$category->name?>"></td>
        </tr> <tr>
            <td>Desc</td>
            <td><input type="text" name="desc" value="<?=$category->desc?>"></td>
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
