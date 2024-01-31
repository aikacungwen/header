<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Player with Video.js</title>
  <!-- Sertakan library Video.js -->
  <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet">
  <script src="https://vjs.zencdn.net/7.15.4/video.js"></script>
  <style>
    /* Tambahkan gaya CSS untuk membuat video mengisi seluruh halaman */
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
    }

    #my-video {
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>

<?php

// Cek apakah ada parameter video_url yang dikirim
if (isset($_GET["video_url"])) {
  $video_url = $_GET["video_url"];

  // Buat link embed menggunakan Video.js
  $embed_code = '<video id="my-video" class="video-js" controls preload="auto" data-setup="{}">';
  $embed_code .= '<source src="' . $video_url . '" type="video/mp4">';
  $embed_code .= '</video>';
  
  // Tampilkan link embed
  echo $embed_code;
}

?>

</body>
</html>
