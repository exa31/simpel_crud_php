<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name">
        <br>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <a href="list.php">Kembali</a>
        <button type="submit">Submit</button>
    </form>
</body>

</html>