<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x)
{
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1 / $x;
}

//try and catch from js basicaly, 1st is ok, second should trow error,
//  but try and catch works and we can handle the error

// try {
//     echo inverse(5);
//     echo inverse(0);
// } catch (Exception $e) {
//     echo 'Message: ' . $e->getMessage();
// }


//finally will always run
try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
} finally {
    echo 'First finally.';
}
