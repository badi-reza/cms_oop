<?php
session_start();
include_once "LoginAdmin.php";
$query = LoginAdmin::SelectUser();
$item = [];
$flag = 0;
while ($item=mysqli_fetch_assoc($query)){
    $flag=1;
}

if ($flag==0){
    $username = "rezabadi";
    $password = "rezabadi";
    $hash = sha1($password);
    $salt = $hash."6649893595";
    $final = sha1($salt);
    LoginAdmin::InsertUser($username,$password);
}

if (isset($_SESSION['admin'])){
    header("location:admin.php");
}

if (isset($_SESSION['wrong'])){
    echo $_SESSION['wrong'];
}
?>



<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<title>صفحه ثبت نام کاربر</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

</head>
<body>
	<!-- main -->
	<div class="karbarwp wrapper">
		<h1>فرم عضویت در سایت</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="check.php" method="post">
					<input class="text" type="text" name="username" placeholder="نام کاربری" required="">
					<input class="text" type="password" name="password" placeholder="رمز عبور" required="">


					<input type="submit" value="ثبت">
				</form>
			</div>
		</div>

	</div>
	<!-- //main -->
</body>
</html>