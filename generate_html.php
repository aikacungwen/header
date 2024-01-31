<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $judul = $_POST['judul'];
    $video_url = $_POST['video_url'];
    $subtitle_url = $_POST['subtitle_url'];

    // Buat isi file HTML
    $html_content = "<!DOCTYPE html>
    <html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>$judul</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://vjs.zencdn.net/7.15.5/video-js.css\">
    </head>
    <body>
        <video id=\"my_video_1\" class=\"video-js vjs-default-skin\" width=\"640\" height=\"360\"
            controls preload=\"auto\" poster=\"http://video-js.zencoder.com/oceans-clip.jpg\"
            data-setup='{\"aspectRatio\":\"640:360\", \"playbackRates\": [1, 1.5, 2]}'>
            <source src=\"$video_url\" type=\"video/mp4\" />
            
            <!-- Tambahkan elemen track untuk subtitle -->
            <track label=\"Indonesia\" kind=\"subtitles\" srclang=\"id\" src=\"$subtitle_url\" default>
        </video>
     
        <script src=\"https://vjs.zencdn.net/7.15.5/video.js\"></script>
    </body>
    </html>";

    // Simpan file HTML di direktori root
    $file_path = __DIR__ . '/video_output.html';
    file_put_contents($file_path, $html_content);

    // Redirect ke file HTML yang baru dibuat
    header("Location: video_output.html");
    exit();
}
?>
