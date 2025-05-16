<!DOCTYPE html>
<html>
<head>
  <title>File Upload App</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f8ff;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
    }

    form {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    input[type="file"] {
      margin: 10px 0;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #0083b0;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #00b4db;
    }

    img {
      max-width: 300px;
      margin-top: 20px;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <h2>Upload File</h2>
    <input type="file" name="uploadedFile" required><br>
    <input type="submit" value="Upload">
  </form>

<?php
$targetDir = "uploads/";

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if (isset($_FILES["uploadedFile"])) {
    $fileName = basename($_FILES["uploadedFile"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    
    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFilePath)) {
            echo "<p style='font-family:sans-serif;'>File <strong>$fileName</strong> uploaded successfully!</p>";
            echo "<img src='$targetFilePath' alt='Uploaded Image'>";
        } else {
            echo "<p>Sorry, there was an error uploading your file.</p>";
        }
    } else {
        echo "<p>Only image files (jpg, jpeg, png, gif) are allowed.</p>";
    }
}
?>
</body>
</html>
