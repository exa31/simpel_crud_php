<?php
include("connection.php");

$delete = $db->query("DELETE FROM users WHERE id = {$_GET['id']}");
header("Location: list.php");