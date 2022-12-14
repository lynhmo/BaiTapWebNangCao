<?php
session_start();
require_once("./functions.php");
// require_once("dbConnection.php");

$username = getValue("username", "POST", "str", "");
$password = getValue("password", "POST", "str", "");
$action = getValue("action", "POST", "str", "");


var_dump($_POST);
echo ('<br>');
var_dump($username);
echo ('<br>');
var_dump($password);
echo ('<br>');
var_dump($action);

$errorMsg = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/index.css">
    <title>Bai 2 - Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    // define variables and set to empty values
    function check_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Message = $ErrorUname = $ErrorPass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = check_input($_POST["username"]);

        if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
            $ErrorUname = "Space and special characters not allowed but you can use underscore(_).";
        } else {
            $fusername = $username;
        }

        $fpassword = check_input($_POST["password"]);

        if ($ErrorUname != "") {
            $Message = "Login failed! Errors found";
        } else {
            include("dbConnection.php");
            $dbConnection = new dbConnection();
            $conn = $dbConnection->getConnection();
            $query = mysqli_query($conn, "select * from `users` where name='$fusername' && password='$fpassword'");
            $num_rows = mysqli_num_rows($query);
            $row = mysqli_fetch_array($query);
        }
    }
    ?>
    <div class="login-form">
        <form action="" method="POST">
            <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
            <h4 class="modal-title">Login to Your Account</h4>
            <?php
            if ($action == "login") {
                if ($num_rows > 0) {
                    $_SESSION["logged"] = 1;
                    header("Location: dashboard.php");
                } else {
                    echo ('<span style="color: red;">*Login Fail</span>');
                }
            }
            ?>
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required" value="<?= $username ?>">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required" value="<?= $password ?>">
            </div>
            <div class="form-group small clearfix">
                <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>
            <input type="hidden" id="action" name="action" value="login" />
            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
        </form>
        <div class="text-center small">Don't have an account? <a href="#">Sign up</a></div>
    </div>
</body>

</html>