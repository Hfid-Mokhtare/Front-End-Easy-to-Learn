<?php

$url = 'https://www.myway.ac.ma/';
$handle = @fopen($url, 'r');

if ($handle) {
    echo "Successfully opened URL: " . $url . "\n\n";

    // Read the content line by line
    while ($line = fgets($handle)) {
        echo $line;
    }

    // Alternatively, read the entire content at once (might be memory-intensive for large pages)
    // $content = stream_get_contents($handle);
    // echo $content;

    fclose($handle);
} else {
    echo "Failed to open URL: " . $url . "\n";
}

?>
