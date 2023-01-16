<?php 
// cek jika submit button sudah di pencet atau belum

if (isset($_POST["submit"])) {

    // cek username dan password

        if ( $_POST["username"] == "usamah" && $_POST ["password"] == "6969" ) {

    // jika bener maka redirect ke halaman admin
        header("Location: admin.php");
            exit;
        } else {
    // jika salah maka munculkan text error
    } $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<?php if ( isset($error) ): ?>
<p>Username / Password anda salah.</p>
<?php endif; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | UserCreation</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
    <br> 
        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>