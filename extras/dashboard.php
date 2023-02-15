<?php

session_start();

if (isset($_SESSION['username'])) {
    echo 'Welcome ' . $_SESSION['username'];
    echo '<a href="/php-course/extras/logout.php?logout=true">Logout</a>';
} else {
    echo 'Welcome guest';
    echo '<a href="/php-course/13_sessions.php">Login</a>';
};
