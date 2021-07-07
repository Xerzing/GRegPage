<?php
    require_once "inc/config.php";

    if (isset($_SESSION['access_token'])) {
        header('Location: show.php');
        exit();
    }

    $loginURL = $gClient->createAuthUrl();
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
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">

                <div id="logo"></div><br><br>

                <form>
                    <input name="email" placeholder="EMail" type="text" class="form-control"><br>
                    <input name="password" placeholder="Password" type="password" class="form-control"><br>
                    <input type="submit" value="Log In" class="btn btn-primary">
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>'" value="Log In with Google" class="btn btn-danger">
                </form>

            </div>
        </div>
    </div>
</body>
</html>
