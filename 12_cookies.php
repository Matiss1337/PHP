<?php
//86400 = 1 day
setcookie('username', 'Matiss', time() + 86400 * 30);


if (isset($_COOKIE['username'])) {
    echo 'User ' . $_COOKIE['username'] . ' is set <br>';
}

//removing cookie is like setting it just time goes minus
setcookie("name", "Matiss", time() - 86400 * 30);
