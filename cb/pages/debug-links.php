<?php
// Save this as debug-links.php in your cb/pages directory

// Create a log file
$log_file = __DIR__ . '/link_debug.txt';
file_put_contents($log_file, date('Y-m-d H:i:s') . " - Link diagnostics started\n", FILE_APPEND);

// Function to examine the base tag and HTML structure
function analyze_html($html) {
    global $log_file;

    // Check if there's a base tag
    $has_base_tag = (bool)preg_match('/<base\s+href=["\'](.*?)["\']/', $html, $base_matches);

    if ($has_base_tag) {
        file_put_contents($log_file, "Base tag found: " . $base_matches[1] . "\n", FILE_APPEND);
    } else {
        file_put_contents($log_file, "No base tag found in HTML\n", FILE_APPEND);
    }

    // Extract all links
    preg_match_all('/<a\s+[^>]*href=["\'](.*?)["\']/i', $html, $matches);

    file_put_contents($log_file, "Found " . count($matches[1]) . " links in the HTML\n", FILE_APPEND);

    // Analyze first 10 links
    $count = 0;
    foreach ($matches[1] as $url) {
        if ($count++ > 10) break;
        file_put_contents($log_file, "Link: " . $url . "\n", FILE_APPEND);
    }

    // Extract all image sources
    preg_match_all('/<img\s+[^>]*src=["\'](.*?)["\']/i', $html, $img_matches);

    file_put_contents($log_file, "Found " . count($img_matches[1]) . " images in the HTML\n", FILE_APPEND);

    // Analyze first 5 images
    $count = 0;
    foreach ($img_matches[1] as $src) {
        if ($count++ > 5) break;
        file_put_contents($log_file, "Image: " . $src . "\n", FILE_APPEND);
    }

    // Check if the HTML has been properly modified
    return $html;
}

// Start output buffering to capture and examine the HTML
ob_start("analyze_html");
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Link Diagnostics</title>
        <base href="/cb/" />
    </head>
    <body>
    <h1>Link Diagnostics Tool</h1>

    <p>This tool examines how links are structured on your site. The results are logged to link_debug.txt.</p>

    <h2>Instructions:</h2>
    <ol>
        <li>First, access this tool at: <code>http://leptozan.local/cb/pages/debug-links.php</code></li>
        <li>Check the log file at <code>cb/pages/link_debug.txt</code> to see what was found</li>
        <li>Next, copy this file to your <code>cb/pages</code> directory as <code>debug-page.php</code></li>
        <li>Modify it to include your actual header and navigation code</li>
        <li>Access it at <code>http://leptozan.local/cb/pages/debug-page.php</code></li>
    </ol>

    <p>Based on the results, we can determine what's happening with your links.</p>

    <hr>

    <h2>Additional Diagnostics:</h2>

    <h3>Browser Information:</h3>
    <pre>
    User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?>

    Request URI: <?php echo $_SERVER['REQUEST_URI']; ?>
    </pre>

    <h3>Test Links:</h3>
    <ul>
        <li>Absolute path with domain: <a href="http://leptozan.local/terms">Terms (absolute with domain)</a></li>
        <li>Absolute path: <a href="/terms">Terms (absolute path)</a></li>
        <li>Relative path: <a href="terms">Terms (relative path)</a></li>
        <li>Relative path with ./: <a href="./terms">Terms (relative with ./)</a></li>
        <li>Parent directory: <a href="../terms">Terms (parent directory)</a></li>
    </ul>
    </body>
    </html>
<?php
// Add a debug message to show that the script executed completely
file_put_contents($log_file, date('Y-m-d H:i:s') . " - Script executed completely\n", FILE_APPEND);
?>