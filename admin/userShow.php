<?php
require_once '../database/db_connection.php';
session_start();
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>User Data</h1>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <a href="addUser.php" class="btn btn-success mb-3">
                    Add
                </a>
            </div>
        </div>
        <table class="table table-hover table-striped border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>email</th>
                    <th>MM/DD/YYYY</th>
                    <th>gender</th>
                    <th>address</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["BD"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                    <td colspan="3">No users found</td>
                </tr>
                <?php endif; ?>
</body>

</html>