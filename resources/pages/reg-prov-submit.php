<?php
      $path = require $_SERVER['DOCUMENT_ROOT'].'/config/config-path.php';
      $vertspace = 5;
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="theme-color" content="#4885ed" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WebdExpert - Services</title>
	<link rel="icon" href="images/logo.png">
	<?php include $path['root'].'/includes/style.inc.php';?>
</head>

<body>
	<?php include $path['root'].'resources/templates/header-tmpl.php';?>
	<?php include $path['root'].'resources/templates/navigation-tmpl.php';?>
	<?php include $path['root'].'resources/templates/reg-prov-submit-tmpl.php';?>
	<?php include $path['root'].'resources/templates/footer-tmpl.php';?>
	<?php include $path['root'].'includes/script.inc.php';?>
</body>

</html>
