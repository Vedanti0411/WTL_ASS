<!DOCTYPE html>
<html>
<head>
    <title>POST Input Example</title>
</head>
<body>
    <h2>POST Method Form</h2>
    <form method="POST" action="">
        Enter your name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['name'])) {
        echo "Hello, " . htmlspecialchars($_POST['name']);
    }
    ?>
</body>
</html>
99