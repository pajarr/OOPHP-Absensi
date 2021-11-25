<?php

    require '../config/Database.php';
    require '../library/controllers.php';

    $perintah = new Oop();

    if (isset($_POST['login'])) {
        $table = "tbl_user";
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $namaForm = "hal_admin.php?menu=home";
        $perintah->login($table, $username, $password, $namaForm);
    }

    if (isset($_POST['batal'])) echo "<script>document.location.href='../'</script>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log in Admin</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form method="post" action="">

        <table align="center">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="login" value="LOGIN">
                <input type="submit" name="batal" value="BATAL">
            </td>
        </tr>
    </table>
        </form>
    </body>
</html>