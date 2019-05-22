<?php
include "Database/Config.php";

if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "  INSERT INTO customer (first_name, last_name, email, phone, username, password)
                VALUES ('$first_name','$last_name', '$email', '$telephone', '$username', '$password')";
    $result = mysqli_query($db, $sql);
    header("location: logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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
                            <td><label for="Naam">Naam:</label></td>
                            <td><input type="text" class="form-control" name="first_name" id="Naam"></td>
                            <td><input type="text" class="form-control" name="last_name" id="Naam"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td><label for="Mail">E-mail:</label></td>
                            <td colspan="2"><input type="email" class="form-control" name="email" id="Mail"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td><label for="Tel">Telefoonnummer:</label></td>
                            <td colspan="2"><input type="text" class="form-control" name="telephone" id="Tel"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td><label for="Gebruiker">Gebruikersnaam:</label></td>
                            <td colspan="2"><input type="text" class="form-control" name="username" id="Gebruiker"></td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td><label for="Wachtwoord">Wachtwoord:</label></td>
                            <td colspan="2"><input type="text" class="form-control" name="password" id="Wachtwoord">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-primary" value=" Submit "/></td>
                        <td></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>