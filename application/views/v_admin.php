<!DOCTYPE html>
<html>
<head>
	<title>Welcome to | Ribonhouse</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo ('login/logout'); ?>">Logout</a>
</body>
</html>
