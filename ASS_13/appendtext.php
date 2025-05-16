<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);

    $entry = "Name: $name, Email: $email\n";

    $file = fopen("appenededhere.txt", "a"); // 
    fwrite($file, $entry);
    fclose($file);

    echo "<h3>✅ Data appended successfully!</h3>";
    echo "<p>$entry</p>";
} else {
    echo "⚠️ Invalid request method.";
}

echo "<h3>📄 All Submissions:</h3>";

if (file_exists("appenededhere.txt")) {
    $allData = file_get_contents("appenededhere.txt");
    echo "<pre>$allData</pre>";
} else {
    echo "No data found.";
}
?>
