<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Player</title>
    <link rel="stylesheet" type="text/css" href="https://vjs.zencdn.net/7.15.5/video-js.css">
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = isset($_POST['video_url']) ? $_POST['video_url'] : '';
    $subtitleUrl = isset($_POST['subtitle_url']) ? $_POST['subtitle_url'] : '';

    if (!empty($videoUrl)) {
        ?>
        <video id="my_video_1" class="video-js vjs-default-skin" width="640" height="360"
            controls preload="auto" poster="http://video-js.zencoder.com/oceans-clip.jpg"
            data-setup='{"aspectRatio":"640:360", "playbackRates": [1, 1.5, 2]}'>
            <source src="<?php echo $videoUrl; ?>" type="video/mp4" />
            
            <?php
            if (!empty($subtitleUrl)) {
                echo '<!-- Tambahkan elemen track untuk subtitle -->';
                echo "<track label=\"Indonesia\" kind=\"subtitles\" srclang=\"id\" src=\"$subtitleUrl\" default>";
            }
            ?>
        </video>

        <script src="https://vjs.zencdn.net/7.15.5/video.js"></script>
        <?php
    } else {
        echo '<p>URL video tidak valid.</p>';
    }
}
?>

<!-- Form untuk memasukkan URL video dan URL subtitle -->
<form action="" method="post">
    <label for="video_url">Masukkan URL Video MP4:</label>
    <input type="url" name="video_url" required><br>

    <label for="subtitle_url">Masukkan URL Subtitle (VTT):</label>
    <input type="url" name="subtitle_url"><br>

    <input type="submit" value="Buat Pemutar">
</form>

</body>
</html>
