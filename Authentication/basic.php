<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authentication required.';
    exit;
} else {
    echo "Welcome, {$_SERVER['PHP_AUTH_USER']}.";
}

?>
