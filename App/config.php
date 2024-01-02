<?php
session_start();
include "const.php";
$conn = mysqli_connect(HOSTNAME, USERNAME, PASS, DBNAME);