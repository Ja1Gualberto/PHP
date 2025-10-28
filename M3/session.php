<?php 

session_start();

// $_SESSION["teste"] = 123;
$_SESSION["name"] = "João Pedro";
$_SESSION["idade"] = "20";
$_SESSION["local"] = "PVH";

print_r($_SESSION);

unset($_SESSION["name"]);
unset($_SESSION["idade"]);
unset($_SESSION["local"]);
unset($_SESSION["teste"]);

print_r($_SESSION);
?>