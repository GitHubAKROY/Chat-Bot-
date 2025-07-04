<?php 
session_start();
include('dbcon.php');

if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM history WHERE email = '$email' AND password = '$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["email"] = $email;
        header("location: index.html");
    } else {
        $error = "Invalid login credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Akash</title>
<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container3">
	<div class="login-box">
		<h5>Login</h5>
		<form action="" method="post">
			<div class="input-box">
			<input type="email" name="email" required>
			<label>Email</label>
		</div>
		<div class="input-box">
			<input type="password" name="password" required>
			<label>Password</label>
		</div>
		<div class="forget-pass">
			<a href="#">Forget your password?</a>
		</div>
		<a href="index.html"><input type="submit" class="button" value="Login" name="login"></input></a>
		<div class="signup-link">
			<a href="history-create.php">Signup</a>
		</div>
		</form>
		</div>

		<span style="--i:11;"></span>
		<span style="--i:12;"></span>
		<span style="--i:13;"></span>
		<span style="--i:14;"></span>
		<span style="--i:15;"></span>
		<span style="--i:16;"></span>
		<span style="--i:17;"></span>
		<span style="--i:18;"></span>
		<span style="--i:19;"></span>
		<span style="--i:20;"></span>
		<span style="--i:21;"></span>
		<span style="--i:22;"></span>
		<span style="--i:23;"></span>
		<span style="--i:24;"></span>
		<span style="--i:25;"></span>
		<span style="--i:26;"></span>
		<span style="--i:27;"></span>
		<span style="--i:28;"></span>
		<span style="--i:29;"></span>
		<span style="--i:30;"></span>
		<span style="--i:31;"></span>
		<span style="--i:32;"></span>
		<span style="--i:33;"></span>
		<span style="--i:34;"></span>
		<span style="--i:35;"></span>
		<span style="--i:36;"></span>
		<span style="--i:37;"></span>
		<span style="--i:38;"></span>
		<span style="--i:39;"></span>
		<span style="--i:40;"></span>
		<span style="--i:41;"></span>
		<span style="--i:42;"></span>
		<span style="--i:43;"></span>
		<span style="--i:44;"></span>
		<span style="--i:45;"></span>
		<span style="--i:46;"></span>
		<span style="--i:47;"></span>
		<span style="--i:48;"></span>
		<span style="--i:49;"></span>
		<span style="--i:50;"></span>
		<span style="--i:51;"></span>
		<span style="--i:52;"></span>
		<span style="--i:53;"></span>
		<span style="--i:54;"></span>
		<span style="--i:55;"></span>
		<span style="--i:56;"></span>
		<span style="--i:57;"></span>
		<span style="--i:58;"></span>
		<span style="--i:59;"></span>
		<span style="--i:60;"></span>
	</div>
</body>
