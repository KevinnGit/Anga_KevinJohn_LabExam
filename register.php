<?php
$message = "";
$messageClass = "";

if (isset($_POST['register'])) {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($fullname === "" || $email === "" || $username === "" || $password === "") {
        $message = "All fields are required!";
        $messageClass = "error";
    } else {
        $message = "Registration Successful!";
        $messageClass = "success";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" style="width:600px;">

    <img src="logo.png" width="120"><br><br>
    <h2>Welcome To College Of Computing Education</h2>

    <form method="POST">

        <div class="row">
            <input type="text" name="fullname" placeholder="Full Name">
            <input type="text" name="username" placeholder="Username">
        </div>

        <div class="row">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
        </div>

        <button type="submit" name="register">Register</button>

    </form>

    <p>Already have an account?
        <a href="login.php">Back to Login</a>
    </p>

<div class="<?php echo $messageClass; ?>"><?php echo $message; ?></div>

</div>

</body>
</html>
