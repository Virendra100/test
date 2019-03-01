<?php
	//Checks whether the session is alive or not
	require('includes/checkSession.php');

	//Loads the dynamic contents
	require('includes/contentConfig.php');
?>
<html>

	<head>
		<title>Tubelight Admin</title>
	</head>
	<frameset cols="*" border="0" frameborder="0">
		<!--frame name="menu" target="main" src="menu.php" scrolling="No" -->
		<frame name="main" src="dashboard.php" scrolling="auto" noresize/>
	</frameset>
</html>
