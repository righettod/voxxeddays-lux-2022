<?php
header("Cross-Origin-Resource-Policy: same-origin");
$file_out = "luxembourg.jpg";
$image_info = getimagesize($file_out);
header('Content-Type: ' . $image_info['mime']);
header('Content-Length: ' . filesize($file_out));
readfile($file_out);
