<?php
include 'db.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $conn->query("INSERT INTO users (name, age) VALUES ('$name', $age)");

    // Redirect to avoid resubmission on refresh
    header("Location: index.php");
    exit();
}
// Fetch users from the database
$users = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Smart Methods Task</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function toggleStatus(id) {
            fetch("toggle.php?id=" + id)
            .then(response => response.text())
            .then(data => {
                document.getElementById("status-" + id).innerText = data;
            });
        }
    </script>
</head>
<body>
    <h2>Add User</h2>
    <form method="POST">
        Name: <input type="text" name="name" required>
        Age: <input type="number" name="age" required>
        <input type="submit" value="Submit">
    </form>

    <h2>Users</h2>
    <table border="1">
        <tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr>
        <?php while ($row = $users->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['age'] ?></td>
            <td id="status-<?= $row['id'] ?>"><?= $row['status'] ?></td>
            <td><button onclick="toggleStatus(<?= $row['id'] ?>)">Toggle</button></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
