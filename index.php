<?php require 'config.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Pintrest Example</title>
</head>
<body>
	<h1>Pintrest Example</h1>
	<p>
		<?php if (!isset($_COOKIE['access_token'])): ?>
			<a href="<?php echo $pinterest->auth->getLoginUrl('https://pintrest.test/redirect.php', array('read_public', 'write_public')); ?>">Login</a>
		<?php else: ?>
			<a href="me.php">Get current user details.</a>
		<?php endif; ?>
	</p>
</body>
</html>