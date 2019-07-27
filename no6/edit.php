<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $name = $_POST['name'];
    $id_work = $_POST['id_work'];
    $id_salary = $_POST['id_salary'];

    // update user data
    $gabungan = mysqli_query($conn, "UPDATE name SET name='$name',id_work='$id_work',id_salary='$id_salary' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// $name = $_GET['name'];
// $id_work = $_GET['id_work'];
// $id_salary = $_GET['id_salary'];

// Fetch user data based on id
$result= mysqli_query($conn, "SELECT * FROM name WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $name = $user_data['name'];
    $id_work = $user_data['id_work'];
    $id_salary = $user_data['id_salary'];
}
?>

<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Id</td>
                <td><input type="int" name="id" value=<?php echo $id;?>></td>
            </tr>
            </tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Id Work</td>
                <td><input type="int" name="id_work" value=<?php echo $id_work;?>></td>
            </tr>
            <tr> 
                <td>Id Salary</td>
                <td><input type="int" name="id_salary" value=<?php echo $id_salary;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>