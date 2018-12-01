<?php
include 'methods.php'
$user = $db->query('SELECT * from db_users where uname like '.  $_POST['Username'])
if ($user[0]['hash'] == $_POST['hash']){
	session.start(['user']=$_POST['Username'])
	include 'userpage.php'
}
else{
	include 'index.html'
}