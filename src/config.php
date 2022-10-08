<?php
session_start();
$host = "iim_lemp_mysql"; /* Host name */
$user = "root"; /* User */
$password = "root"; /* Password */
$dbname = "demo"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
