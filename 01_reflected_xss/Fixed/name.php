<?php

$name = htmlspecialchars($_GET["name"]);

if ($name == "admin" && $_COOKIE['name'] != 'admin') 
{
echo 'NO THANK YOU';
break;
}

# User has no cookie
if(!isset($_COOKIE['name']))
{
	setcookie('name',$name,time()+60);
	echo 'Hello ' . $name . '!';	
} 

# User has cookie named admin
elseif($_COOKIE['name'] == 'admin')
{
	echo 
	'
	Welcome Admin!<br>
	';
} 

# User has cookie, input does not match cookie name
elseif($name != $_COOKIE['name'])
{
	$name = $_COOKIE['name'];
	echo 'Welcome back ' . $name . ', you can'."'".'t fool us!<br>';
	unset($_COOKIE['name']);
	echo 'Sorry but your cookie has been deleted for security reasons...';
}

# User has cookie, input matches cookie name
elseif($name == $_COOKIE['name'])
{
	echo 'Welcome back ' . $name . '!<br>';
}
else
{
	echo 'um...';
}

?>