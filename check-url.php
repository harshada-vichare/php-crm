<?php
// Determine the protocol (http or https)
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://";

// Get the host name (e.g., www.example.com or localhost)
$host = $_SERVER['HTTP_HOST'];

// Get the request URI (the path and query string, e.g., /folder/page.php?var=bla)
$request_uri = $_SERVER['REQUEST_URI'];

// Construct the full URL
$full_url = $protocol . $host . $request_uri;

// Get only the path part, removing any query strings (e.g., "?sort=asc")
$path = parse_url($request_uri, PHP_URL_PATH); 

// Get the final component of the path
$last_part = basename($path);

?>
