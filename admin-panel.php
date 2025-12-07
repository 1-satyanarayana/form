<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin-login.php");
    exit;
}
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM form_data ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<style>
table{
    width:100%;
    border-collapse: collapse;
}
table, th, td{
    border:1px solid #333;
}
th, td{
    padding:10px;
}
a{
    background:red;color:white;padding:5px 10px;text-decoration:none;
}
</style>
</head>
<body>

<h2>Welcome Admin</h2>
<a href="logout.php">Logout</a>

<h3>All Form Submissions</h3>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Date</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td><?= $row['message'] ?></td>
    <td><?= $row['created_at'] ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>