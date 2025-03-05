<?php
// Save this as global-prefix.php in your cb/pages directory

// Detect if we're in the /cb/ path
$in_cb_path = (isset($_SERVER['REDIRECT_IN_CB']) && $_SERVER['REDIRECT_IN_CB'] == '1') ||
    (strpos($_SERVER['REQUEST_URI'], '/cb/') === 0);

// Start output buffering to capture all HTML output
ob_start();

// Function to modify URLs when the buffer is flushed
function modify_urls($buffer) {
    global $in_cb_path;

    if ($in_cb_path) {
        // Add /cb prefix to all internal links
        $buffer = preg_replace('/(href|src|action)=(["\'])(\/[^\/][^"\']*?)(["\'])/i', '$1=$2/cb$3$4', $buffer);

        // Fix double /cb/cb if it occurs
        $buffer = str_replace('/cb/cb/', '/cb/', $buffer);
    }

    return $buffer;
}

// Register the output buffer callback
ob_start('modify_urls');

// No need to return anything - just include this file at the top of each PHP file
?>