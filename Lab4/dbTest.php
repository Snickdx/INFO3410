<?php
//making a slight change to see if it would noticed
$con = new mysqli("localhost", "admin2", "adminpass", "mydb");
$res = $con->query("SELECT * FROM `user`");
echo(print_r($res->fetch_assoc()));