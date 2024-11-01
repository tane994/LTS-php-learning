<?php
// PHP Superglobals:
// Built-in variables that are accessible in all scopes within a PHP script.
// They provide data related to requests, sessions, cookies, and server environment.

// $_GET: 
// Retrieves data sent via URL parameters in GET requests.
// Commonly used to access query strings, 
// allowing data to be passed to a page directly from the URL.

// $_POST: 
// Retrieves data sent in POST requests.
// Often used in forms to securely send sensitive data, 
// like passwords, to the server without exposing it in the URL.

// $_REQUEST: 
// A combined superglobal containing data from $_GET, $_POST, and $_COOKIE.
// It allows access to variables regardless of how they were sent to the server, 
// though care is needed to avoid ambiguity when variables share names.

// $_SERVER: 
// Contains server and execution environment information.
// Provides details about headers, paths, and script locations, 
// making it useful for accessing server settings and the current script's context.

// $_FILES: 
// Manages file upload information.
// Contains details such as the file name, type, and size for each uploaded file, 
// allowing server-side handling of uploaded files through forms.

// $_COOKIE: 
// Stores small amounts of data on the client side that persist across sessions.
// Used for storing user-specific data, like preferences, 
// that can be retained across different visits to the site.

// $_SESSION: 
// Stores data on the server across different pages within a single session.
// More secure than cookies, it keeps user data server-side, 
// ideal for storing sensitive information.

// $_ENV: 
// Contains environment variables from the server configuration.
// These are often set in the server environment and can store sensitive data 
// such as database credentials or API keys, providing security without hard-coding.

// $GLOBALS: 
// Stores all global variables in the current script.
// Provides access to these global variables from any scope, including inside functions, 
// allowing them to be modified globally.
