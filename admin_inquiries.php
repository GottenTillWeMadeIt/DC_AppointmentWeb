<?php
include "php/db_connect.php";

$result = $conn->query("SELECT * FROM inquiries ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin - Inquiries</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="container mt-5">

<h2>All Inquiry Messages</h2>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Status</th>
    <th>Date</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['subject'] ?></td>
    <td style="max-width:300px; word-wrap:break-word;">
        <?= $row['message'] ?>
    </td>
    <td><?= $row['status'] ?></td>
    <td><?= $row['created_at'] ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>