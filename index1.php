<?php

include 'config/Class.Dbconfig.php';


$db = new Database();

$sth = $db->connect->query('select *from users');

$rows = $sth->fetchAll();

var_dump($rows);



