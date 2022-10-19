<?php
@session_start();
include_once('connection.php');

$errors = "";

function test_input($data)
{

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach ($users as $user) {

        if (($user['adminname'] == $adminname) &&
            ($user['password'] == $password)
        ) {
            // username and password are correct
            $_SESSION['username'] = $adminname;
            header("Location: index.php");
        } else {
            // username and password are wrong
            $errors = "Wrong username/password";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>

<body>
    <form action="login123123.php" method="post">
        <div class="login-box">
            <h1>Login</h1>

            <?php if ($errors) { ?>
                <div class="erordiv"><?php echo $errors; ?></div>
            <?php } ?>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname" name="adminname" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>

            <input class="button" type="submit" name="login" value="Sign In">
        </div>
    </form>
</body>

</html>