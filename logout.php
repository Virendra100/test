<html> 
<?php
	function server_url()
	{   
   		$proto = "http" .
       		((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "s" : "") . "://";
   		$server = isset($_SERVER['HTTP_HOST']) ?
       		$_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
   		return $proto . $server;
	}

	//Starts the session 
	session_start();
	//Unregisters the session variable username
	//session_unregister('username');
	//sets the session variable username to null
	$_SESSION['username']=null;
	// Finally, destroy the session.
    session_destroy();

	$url = server_url() . dirname($_SERVER['PHP_SELF']) . "/" ;
	echo "<center><b><font face=\"Tahoma\">Logging out . . . . . . . . . . Please wait !</font></b></center>";
	echo "<meta http-equiv=\"refresh\" content=\"1;url=$url\">\r\n";
	echo "<noscript><center> Please click <a href=$url target=_top>here</a> To continue</center> </noscript>";
?>
</html>
