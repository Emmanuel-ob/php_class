<?php

require('dbConnection.php');
require('queryBuilder.php');

$pdo = connection();

$query = new QueryBuilder($pdo);
$data = array('stu_name'=>'Abah', 'age'=>31, 'email'=>'abah@yahoo.com');

$result = $query->selectAll('fellows');

var_dump($result);


?>