<?php
session_start();
if($_SESSION["user"] == TRUE){
	$result = mysqli_query($con,"SELECT 'admin' FROM 'users' WHERE 'id'='".$_SESSION["id"]."'");
	echo $result;
}