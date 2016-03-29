<?php
require_once("remoteFileClass.php");
$remoteFileCheck = new remoteFileCheck();

if($remoteFileCheck->file_exists("https://www.google.com/images/nav_logo242.png"))
	echo "File exists";
else
	echo "File does not exists";
