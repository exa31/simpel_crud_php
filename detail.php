<?php
include("connection.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM users WHERE id = $id");
$detail = $query->fetch();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Nama: <?= "{$detail['first_name']} {$detail['last_name']}" ?> </h3>
    <h3>Email: <?= "{$detail['email']}" ?> </h3>
    <h3>Gender: <?= "{$detail['gender']}" ?> </h3>
    <button><a href="list.php">Kembali</a></button>
</body>

</html>