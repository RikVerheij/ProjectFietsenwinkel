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

<?php
include "header.php";
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

<div class="ps-login">
    <div class="ps-container">
        <div class="row">
            <div class="mx-auto">
                <form action="" method="POST">
                    <table>

                        <tr>
                            <div class="form-group">
                                <td colspan="1"><input type="text" class="form-control" name="first_name" id="Naam" placeholder="Voornaam"></td>
                            </div>
                            <div class="form-group">
                                <td colspan="1"><input type="text" class="form-control" name="last_name" id="Naam" placeholder="Achternaam"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="2"><input type="email" class="form-control" name="email" id="Mail" placeholder="E-mail"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="2"><input type="text" class="form-control" name="telephone" id="Tel" placeholder="Telefoonnummer"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="2"><input type="text" class="form-control" name="username" id="Gebruiker" placeholder="Gebruikersnaam">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="2"><input type="text" class="form-control" name="password" id="Wachtwoord" placeholder="Wachtwoord">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <td><input type="submit" class="ps-btn ps-btn--sm" value=" Registeren "/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php"
?>
</body>

</html>