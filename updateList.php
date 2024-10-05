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
    <form action="update.php" method="post">
        <label for="first_name">First Name</label>
        <input type="hidden" hidden name="id" value="<?= $detail["id"] ?>">
        <input type="text" name="first_name" value="<?= $detail['first_name'] ?>" id="first_name">
        <br>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="<?= $detail['last_name'] ?>" id="last_name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?= $detail['email'] ?>" id="email">
        <br>
        <?= $detail['gender'] === 'Male' ? 'true' : '' ?>
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option <?= ($detail['gender'] === 'Male') ? 'selected' : '' ?> value="Male">Male</option>
            <option <?= ($detail['gender'] === 'Female') ? 'selected' : '' ?> value="Female">Female</option>
        </select>
        <br>
        <a href="list.php">Kembali</a>
        <button type="submit">Submit</button>
    </form>
</body>

</html>