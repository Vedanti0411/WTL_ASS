<!DOCTYPE html>
<html>
<head>
    <title>GET Input Example</title>
</head>
<body>
    <h2>GET Method Form</h2>
    <form method="GET" action="">
        Enter your name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['name'])) {
        echo "Hello, " . htmlspecialchars($_GET['name']);
    }
    ?>
</body>
</html>
