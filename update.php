<?php
include("connection.php");

$data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'gender' => $_POST['gender'],
    'id' => $_POST['id'],
];


try {
    //code...
    $insert = $db->query("UPDATE users 
    SET first_name = '{$data['first_name']}', last_name = '{$data['last_name']}', email = '{$data['email']}', gender = '{$data['gender']}' 
    WHERE id = {$data['id']}");
} catch (\Throwable $th) {
    //throw $th;
    print_r($data);
    echo $data['id'];
    echo "" . $th->getMessage() . "";
} finally {
    //code...
    header("Location: list.php");
}



