<?php
include("Database/Config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT customer_id FROM customer WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db, $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        header("location: index.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="mx-auto">
            <form action="" method="POST">
                <table>
                    <tr>
                        <div class="form-group">
                            <td><label for="Gebruikersnaam">Gebruikersnaam:</label></td>
                            <td><input type="text" class="form-control"  name="username" id="Gebruikersnaam"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td><label for="Wachtwoord">Gebruikersnaam:</label></td>
                            <td><input type="password" class="form-control"  name="password" id="Wachtwoord"></td>
                        </div>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-primary" value=" Login "/>
                            <a href="register.php">Registreren</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>