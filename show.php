<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08.10.18
 * Time: 15:30
 */

    session_start();

    if (!isset($_SESSION['access_token'])) {
        header('Location: login.php');
        exit();
    }

?>

<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 id="congrat">Congratulation, you're with us!</h1>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <img src="<?php echo $_SESSION['picture']?>" style="width: 90%">
        </div>
        <div class="col-md-8">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?php echo $_SESSION['id_user'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Fisrt Name</th>
                        <td><?php echo $_SESSION['first_name'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Last Name</th>
                        <td><?php echo $_SESSION['last_name'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">E-Mail</th>
                        <td><?php echo $_SESSION['email'] ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Gender</th>
                        <td><?php echo $_SESSION['gender'] ?></td>
                    </tr>
                </tbody>
            </table>
            <form action="logout.php">
                <input type="submit" value="Logout" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
</body>
</html>