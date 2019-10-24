<?php

    $filename = "logo.png";

    $base64 = base64_encode(file_get_contents($filename));

    echo "data:image/png;base64, " . $base64;
?>