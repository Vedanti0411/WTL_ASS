<?php

$host = "localhost";
$username = "root";
$password = "Atharv@04*08";
$database = "crud_db";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $edit_id = $_POST['edit_id'] ?? '';

    if (!empty($name) && !empty($email)) {
        if (!empty($edit_id)) {
           
            $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
            $stmt->bind_param("ssi", $name, $email, $edit_id);
        } else {
            
            $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
            $stmt->bind_param("ss", $name, $email);
        }
        $stmt->execute();
        $stmt->close();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_GET['delete'])) {
    $delete_id = intval($_GET['delete']);
    $conn->query("DELETE FROM users WHERE id = $delete_id");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}


$edit_user = null;
if (isset($_GET['edit'])) {
    $edit_id = intval($_GET['edit']);
    $result = $conn->query("SELECT * FROM users WHERE id = $edit_id");
    $edit_user = $result->fetch_assoc();
}


$users = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User CRUD</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input { margin: 5px; padding: 8px; font-size: 14px; }
        button { padding: 8px 15px; font-size: 14px; }
        table { border-collapse: collapse; width: 70%; margin-top: 20px; }
        th, td { border: 1px solid #999; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; padding: 4px 8px; background: #007bff; color: white; border-radius: 4px; }
        a.delete { background: #dc3545; }
    </style>
</head>
<body>

    <h2><?= $edit_user ? "Edit User" : "Add New User" ?></h2>
    <form method="POST">
        <input type="hidden" name="edit_id" value="<?= $edit_user['id'] ?? '' ?>">
        <input type="text" name="name" placeholder="Enter name" required value="<?= $edit_user['name'] ?? '' ?>">
        <input type="email" name="email" placeholder="Enter email" required value="<?= $edit_user['email'] ?? '' ?>">
        <button type="submit"><?= $edit_user ? "Update" : "Save" ?></button>
        <?php if ($edit_user): ?>
            <a href="<?= $_SERVER['PHP_SELF'] ?>">Cancel</a>
        <?php endif; ?>
    </form>

    <h2>User List</h2>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
        </tr>
        <?php if ($users->num_rows > 0): ?>
            <?php while ($row = $users->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <a href="?edit=<?= $row['id'] ?>">Edit</a>
                        <a href="?delete=<?= $row['id'] ?>" class="delete" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="4">No users found</td></tr>
        <?php endif; ?>
    </table>

</body>
</html>
