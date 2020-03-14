<?php
session_start();
if($_SESSION['login_status']!=true)
{
	header('Location:login_index.php');
}

?>