<?php
$con = mysql_connect("localhost", "root", "123456789")or die("cannot connect"); 
mysql_select_db("user_db")or die("cannot select DB");
date_default_timezone_set('Asia/Bangkok');
?>