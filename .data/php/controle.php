<?php
session_start();

if(!isset($_SESSION["client"])){
	header("Location: ./login");
	exit;
}
?>