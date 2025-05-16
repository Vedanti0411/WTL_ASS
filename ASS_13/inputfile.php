<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    file_put_contents("myfile.txt", $text); 
    echo "<h3>Saved Content:</h3><pre>" . file_get_contents("myfile.txt") . "</pre>"; 
}
?>
