<?php
// Save this as fixed-auto-include.php in your cb/pages directory

// Create a log file to track what's happening
$log_file = __DIR__ . '/auto_include_log.txt';
file_put_contents($log_file, date('Y-m-d H:i:s') . " - Script started\n", FILE_APPEND);

// First, create the base-tag.php file if it doesn't exist
$base_tag_content = '<?php
// This file is auto-generated - do not edit
// It adds a base tag to all pages in the /cb directory

// Start output buffering
ob_start();

// Function to add base tag to HTML when output buffer is flushed
function add_base_tag($html) {
    // Check if we\'re in the /cb/ path
    if (strpos($_SERVER[\'REQUEST_URI\'], \'/cb/\') === 0) {
        // Add base tag to head if not already present
        if (strpos($html, \'<base href\') === false && strpos($html, \'<head>\') !== false) {
            $html = str_replace(\'<head>\', \'<head><base href="/cb/" />\', $html);
        }
    }
    return $html;
}

// Register the output buffer callback
ob_start("add_base_tag");
?>';

$base_tag_file = __DIR__ . '/base-tag.php';
file_put_contents($base_tag_file, $base_tag_content);
file_put_contents($log_file, date('Y-m-d H:i:s') . " - Created base-tag.php\n", FILE_APPEND);

// Get all PHP files in the directory
$directory = __DIR__; // The current directory (cb/pages)
$files = glob($directory . '/*.php');
file_put_contents($log_file, date('Y-m-d H:i:s') . " - Found " . count($files) . " PHP files\n", FILE_APPEND);

// Track our progress
$modified_count = 0;
$already_modified_count = 0;
$error_count = 0;

foreach ($files as $file) {
    // Skip this file and the base-tag file
    $filename = basename($file);
    if ($filename == 'fixed-auto-include.php' || $filename == 'auto-include.php' || $filename == 'base-tag.php') {
        file_put_contents($log_file, date('Y-m-d H:i:s') . " - Skipping: $filename\n", FILE_APPEND);
        continue;
    }

    // Read the file content
    $content = file_get_contents($file);

    // Check if the include is already there
    if (strpos($content, "include_once 'base-tag.php';") === false &&
        strpos($content, "include_once \"base-tag.php\";") === false) {

        // Add the include at the top
        $new_content = "<?php include_once 'base-tag.php'; ?>\n" . $content;

        // Try to write the modified content back to the file
        try {
            // Check if file is writable
            if (!is_writable($file)) {
                file_put_contents($log_file, date('Y-m-d H:i:s') . " - ERROR: File not writable: $filename\n", FILE_APPEND);
                echo "ERROR: File not writable: $filename<br>";
                $error_count++;
                continue;
            }

            // Write the content with error checking
            $result = file_put_contents($file, $new_content);

            if ($result === false) {
                file_put_contents($log_file, date('Y-m-d H:i:s') . " - ERROR: Failed to write to file: $filename\n", FILE_APPEND);
                echo "ERROR: Failed to write to file: $filename<br>";
                $error_count++;
                continue;
            }

            file_put_contents($log_file, date('Y-m-d H:i:s') . " - Modified: $filename\n", FILE_APPEND);
            echo "Successfully modified: $filename<br>";
            $modified_count++;
        } catch (Exception $e) {
            file_put_contents($log_file, date('Y-m-d H:i:s') . " - EXCEPTION: " . $e->getMessage() . " - File: $filename\n", FILE_APPEND);
            echo "EXCEPTION: " . $e->getMessage() . " - File: $filename<br>";
            $error_count++;
        }
    } else {
        file_put_contents($log_file, date('Y-m-d H:i:s') . " - Already modified: $filename\n", FILE_APPEND);
        echo "Already modified: $filename<br>";
        $already_modified_count++;
    }
}

echo "<h3>Summary:</h3>";
echo "Modified files: $modified_count<br>";
echo "Already modified files: $already_modified_count<br>";
echo "Errors: $error_count<br>";
echo "<p>Check log file for details: auto_include_log.txt</p>";

file_put_contents($log_file, date('Y-m-d H:i:s') . " - SUMMARY: Modified: $modified_count, Already modified: $already_modified_count, Errors: $error_count\n", FILE_APPEND);
file_put_contents($log_file, date('Y-m-d H:i:s') . " - Script completed\n", FILE_APPEND);
?>