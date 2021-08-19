<form method="post" action="index.php?c=Category&a=SaveUpdate">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="number" name="id" readonly value="<?=$data[0]?>"></td>
        </tr> <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?=$data[1]?>"></td>
        </tr> <tr>
            <td>Desc</td>
            <td><input type="text" name="desc" value="<?=$data[2]?>"></td>
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
