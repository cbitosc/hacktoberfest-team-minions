<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
include 'footer.php';
include 'studentlogin.php';
?>
<body>
    <div class="jumbotron" style="height:80vh">
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