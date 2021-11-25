<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SIM ABSENSI</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php 
        if (isset($_POST['admin'])) echo "<script>document.location.href='admin'</script>";
        if (isset($_POST['pd'])) echo "<script>document.location.href='pesertadidik'</script>";
        ?>

        <form method="post" action="">
        <table align="center">
            <tr>
                <td colspan="2" align="center">Login Sebagai :</td>
            </tr>
            <tr>
                <td><input type="submit" name="admin" value="Administrator"></td>
                <td><input type="submit" name="pd" value="Peserta Didik"></td>
            </tr>
        </table>
    </body>
</html>