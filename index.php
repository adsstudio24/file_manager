<?php
$upload_dir = "uploads/";
if (!is_dir($upload_dir)) mkdir($upload_dir);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file_path = $upload_dir . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
    echo "✅ Файл завантажено!";
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Завантаження файлів</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">📂 Завантажити</button>
    </form>
</body>
</html>
