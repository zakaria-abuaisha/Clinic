<?php

require "functions.php";

session_start();

$_SESSION = [];

session_destroy();

redirect("../");

?>