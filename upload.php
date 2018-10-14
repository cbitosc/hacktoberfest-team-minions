<?php
session_start();
include 'studentlogin.php';?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="d7">
    <form action="uploadimg.php" method="post" enctype="multipart/form-data">
        <table border="3" width="4" cellspacing="4" cellpadding="4" align="center">
            <tr>
                <td colspan="1">Select image to upload:</td>
                <td><input type="file" id="image" name="image"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="UPLOAD"/></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>