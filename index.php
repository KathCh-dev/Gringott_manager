<?php
require_once __DIR__ . '/lib/database.php';

$db = new DatabaseConnection();

$newadmin = $db->getConnection()->query('SELECT * FROM administrator')->fetchAll();

var_dump($newadmin);