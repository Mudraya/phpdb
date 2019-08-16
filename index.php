<?php

include('Db.php');
$db = new Db();
$db->start('employees');
var_dump($db->select('*'));

