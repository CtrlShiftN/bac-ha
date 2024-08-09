<?php
require "./data/db.php"; // connect to db

$sql = "SELECT * FROM nhan_vien";
$result = $conn->query($sql)->fetchAll();
var_dump($result);
