<?php
// Set URL_PREFIX to /cb
define('URL_PREFIX', '/cb');

// Process specifically the files in this directory
$files = glob(__DIR__ . '/*.php');
echo "<h1>Processing " . count($files) . " component files</h1>";
echo "<ul>";

foreach ($files as $file) {
    if (basename($file) == basename(__FILE__)) {
        continue; // Skip this file
    }

    $filename = basename($file);
    echo "<li>Processing $filename... ";

    $content = file_get_contents($file);

    // Make replacements
    $content = str_replace('"/images/', '"' . URL_PREFIX . '/images/', $content);
    $content = str_replace('"/css/', '"' . URL_PREFIX . '/css/', $content);
    $content = str_replace('"/js/', '"' . URL_PREFIX . '/js/', $content);
    $content = str_replace("'/images/", "'" . URL_PREFIX . "/images/", $content);
    $content = str_replace("'/css/", "'" . URL_PREFIX . "/css/", $content);
    $content = str_replace("'/js/", "'" . URL_PREFIX . "/js/", $content);
    $content = str_replace('href="/', 'href="' . URL_PREFIX . '/', $content);
    $content = str_replace('href=\'/', 'href=\'' . URL_PREFIX . '/', $content);

    file_put_contents($file, $content);

    echo "done.</li>";
}

echo "</ul>";
echo "<h2>All component files have been updated!</h2>";
?>