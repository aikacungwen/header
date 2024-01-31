<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video HTML Generator</title>
</head>
<body>
    <h1>Video HTML Generator</h1>

    <form action="generate_html.php" method="post">
        <label for="judul">Judul Video:</label>
        <input type="text" name="judul" required><br>

        <label for="video_url">URL Video MP4:</label>
        <input type="url" name="video_url" required><br>

        <label for="subtitle_url">URL Subtitle (VTT):</label>
        <input type="url" name="subtitle_url" required><br>

        <input type="submit" value="Buat HTML">
    </form>
</body>
</html>
