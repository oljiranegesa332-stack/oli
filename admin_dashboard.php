<?php
session_start();
include "../db.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: ../login/admin_login.html");
}

$students = mysqli_query($conn,
"SELECT * FROM users WHERE role='student'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h2>Admin Dashboard</h2>

<h3>Student List</h3>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($students)) { ?>
<tr>
    <td><?php echo $row['user_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
</tr>
<?php } ?>

<p>
Admin can view all Student lists.
</p>

<a href="../logout.php">Logout</a>

</body>
</html>
