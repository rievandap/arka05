<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$gabungan = mysqli_query($conn, 'SELECT name.name, work.name1, kategori.salary
                    FROM name, work, kategori
                    WHERE name.id_work = work.id AND name.id_salary = kategori.id');
?>


<!DOCTYPE html>
<htmml>
    <head>
        <title>Halaman Admin</title>
    </head>


    <body>
        <h1>Arkademy</h1>

        <a href="add.php">Add</a>
        <br><br>


        <table border='1' cellpadding='10' cellspacing='0'>

            <tr>
                <th>Name</th>
                <th>Work</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
            <?php foreach($gabungan as $row): ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['name1']; ?></td>
                <td><?= $row['salary']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['name']; ?>">ubah</a> |
                    <a href="del.php?id=<?= $row["name"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</htmml>