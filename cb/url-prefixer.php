<?php
// Save this as url-prefixer.php in your cb directory (same level as pages folder)

// Set URL_PREFIX to /cb
define('URL_PREFIX', '/cb');

// Function to find and replace text in a file
function find_replace_in_file($file, $find, $replace) {
    $content = file_get_contents($file);
    $content = str_replace($find, $replace, $content);
    file_put_contents($file, $content);
}

// Simple replacements we need to make in all PHP files
$replacements = [
    '"/images/' => '"' . URL_PREFIX . '/images/',
    '"/css/' => '"' . URL_PREFIX . '/css/',
    '"/js/' => '"' . URL_PREFIX . '/js/',
    "'/images/" => "'" . URL_PREFIX . "/images/",
    "'/css/" => "'" . URL_PREFIX . "/css/",
    "'/js/" => "'" . URL_PREFIX . "/js/",
    'href="/' => 'href="' . URL_PREFIX . '/',
    'href=\'/' => 'href=\'' . URL_PREFIX . '/',
    'action="/' => 'action="' . URL_PREFIX . '/',
    'action=\'/' => 'action=\'' . URL_PREFIX . '/',
    '$_SERVER[\'DOCUMENT_ROOT\'] . \'/components/' => '$_SERVER[\'DOCUMENT_ROOT\'] . \'' . URL_PREFIX . '/components/',
    '$_SERVER[\'DOCUMENT_ROOT\'] . \'/pages/' => '$_SERVER[\'DOCUMENT_ROOT\'] . \'' . URL_PREFIX . '/pages/'
];

// Find all PHP files in a directory and its subdirectories
function find_php_files($dir) {
    $php_files = [];
    $items = glob($dir . '/*');
    foreach ($items as $item) {
        if (is_dir($item)) {
            $php_files = array_merge($php_files, find_php_files($item));
        } else if (pathinfo($item, PATHINFO_EXTENSION) == 'php') {
            $php_files[] = $item;
        }
    }
    return $php_files;
}

// Process all PHP files in the cb directory
$php_files = find_php_files(__DIR__);
$count = count($php_files);
echo "<h1>Processing $count PHP files</h1>";
echo "<ul>";

foreach ($php_files as $file) {
    if (basename($file) == 'url-prefixer.php') {
        continue; // Skip this file
    }

    $filename = str_replace(__DIR__, '', $file);
    echo "<li>Processing $filename... ";

    foreach ($replacements as $find => $replace) {
        find_replace_in_file($file, $find, $replace);
    }

    echo "done.</li>";
}

echo "</ul>";
echo "<h2>All files have been updated!</h2>";
echo "<p>Your website should now work correctly when accessed via /cb/</p>";
?>