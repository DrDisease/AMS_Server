<?php

$log_usr = $_GET['u']
$log_pwd = $_GETT['p']

$msql= new mysqli("localhost","admin","")
$result = $msql->query("SELECT * FROM users where uname like '".$log_usr."' and pwd like '".$log_pwd."'")
?>
