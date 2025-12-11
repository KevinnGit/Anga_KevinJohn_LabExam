<?php
$message = "";
$messageClass = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === "" || $password === "") {
        $message = "All fields are required!";
        $messageClass = "error";
    } else {
        $message = "Login Successful!";
        $messageClass = "success";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" style="width:450px;">
    <img src="logo.png" width="120"><br><br>

    <h2>Welcome To College Of Computing Education</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit" name="login">Login</button>
    </form>

    <p>Don't have an account?
        <a href="register.php">Register</a>
    </p>

<div class="<?php echo $messageClass; ?>"><?php echo $message; ?></div>
</div>

</body>
</html>
