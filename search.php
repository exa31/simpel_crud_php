<?php
include("connection.php");

$query = $db->query("SELECT * FROM users");
$result = $query->fetchAll();

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = $db->query("SELECT * FROM users WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%'");
    $result = $query->fetchAll();
    print_r(json_encode($result));
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>List</h1>
    <form action="search.php" method="get">
        <input type="text" name="search" id="search">
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <?php foreach ($result as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><a href="detail.php?id=<?= $user['id']; ?>"><?= "{$user['first_name']} {$user['last_name']}"; ?></a>
                </td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['gender']; ?></td>
                <td><a href="updateList.php?id=<?= $user['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $user['id']; ?>">delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="addlist.php">Tambah</a>
</body>

</html>