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
</head>
<body>
<form action="" method="POST">
    <table>
        <tr>
            <td>Naam:</td>
            <td><input type="text" name="first_name"/></td>
            <td><input type="text" name="last_name"/></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td colspan="2"><input type="email" name="email"/></td>
            <td></td>
        </tr>
        <tr>
            <td>Telefoonnummer:</td>
            <td><input type="text" name="telephone"/></td>
            <td></td>
        </tr>
        <tr>
            <td>Gebruikersnaam:</td>
            <td><input type="text" name="username"/></td>
            <td></td>
        </tr>
        <tr>
            <td>Wachtwoord:</td>
            <td><input type="password" name="password"/></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value=" Submit "/></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>