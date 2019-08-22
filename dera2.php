<?php
$user="amna";
$password="kpd2023";
$myuser= trim($_POST['uname']);
$mypassword=trim($_POST['pwd']);

if($myuser == $user && $mypassword == $password){
	echo"Login Accepted!";

}
else{
	echo "wrong username or password!";

}
?>