<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//   echo "Number: $x <br>";
// };


//for each

// $post = ["First post", "Second post", "Third post"];

// for($i = 0; $i < count($post); $i++) {
//   if($i % 2) {
//     echo $post[$i] . "<br>";
//   }
// };

// foreach($post as $post) {
//   echo $post . "<br>";
// }


//for each for asociative array

$person = [
  "name" => "John",
  "surname" => "Doe",
  "age" => 30,
  "hobbies" => ["Tennis", "Video Games"]
];

foreach($person as $key => $value) {
  if(is_array($value)) {
    echo "$key: " . implode(", ", $value) . "<br>";
  } else {
    echo "$key: $value <br>";
  }
}