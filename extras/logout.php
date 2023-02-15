<?php

//need session start to work with session
session_start();


//logout and then redirect to login page
session_destroy();
header('Location: /php-course/13_sessions.php');
