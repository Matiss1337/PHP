<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

// $age = 20;

// if($age >= 18) {
// echo "You are old enought to vote.";
// } else { echo "You are not old enough to vote.";
// };

// $time = date("H");

// if($time < "12") {
//     echo "Good morning!";}
//     elseif($time < "18") {
//         echo "Good afternoon!";
//     }else {
//         echo "Good evening!";
//     };

// $posts = ["First Post"];

// if(!empty($posts)) {
//     echo "Posts available.";
// } else {
//     echo "No posts available.";
// }

// $first_post = !empty($posts) ? $posts[0] : "No posts available.";
// $first_post = $posts[0] ?? null;


// echo $first_post;

$fav_color = "red";

switch($fav_color) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}