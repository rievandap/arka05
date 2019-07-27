
<html>
<head>
    <title>Add Entry</title>
</head>

<body>
    <a href="index.php">Go back</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table border='1' cellpadding='10' cellspacing='0'>
            <tr> 
                <td>Id</td>
                <td><input type="int" name="id"></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Id Work</td>
                <td><input type="int" name="id_work"></td>
            </tr>
            <tr> 
                <td>Id Salary</td>
                <td><input type="int" name="id_salary"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $id_work = $_POST['id_work'];
        $id_salary = $_POST['id_salary'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $gabungan = mysqli_query($conn, "INSERT INTO name(id,name,id_work,id_salary) VALUES('$id','$name','$id_work','$id_salary')"
    );

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>