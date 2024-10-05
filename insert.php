<?php
include("connection.php");

$data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'gender' => $_POST['gender'],
];

$insert = $db->query("INSERT INTO users (first_name, last_name, email, gender) VALUES ('{$data['first_name']}', '{$data['last_name']}', '{$data['email']}', '{$data['gender']}')");
header("Location: list.php");



