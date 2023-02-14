<?php
/* --------- Array Functions -------- */


$fruits = ['apple', 'banana', 'orange'];

// // Get array length
// echo count($fruits);

// // searching an array for something and receiving boolean answer
// var_dump(in_array('apple', $fruits));



// // adding to array end
// $fruits[] = "grape";
// array_push($fruits, 'peach');
// // adding to array start
// array_unshift($fruits, 'starwberry');
// // removing from array end
// array_pop($fruits);
// // removing from array start
// array_shift($fruits);
// //remove specific index, removes index too
// unset($fruits[1]);
// print_r($fruits);


// //split by 2 a set or more
// $chunked = array_chunk($fruits, 2);
// print_r($chunked);


//Concat, merge here in PHP or spread operator in like in JS
// $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 6];

// $arr3 = array_merge($arr1, $arr2);
// $arr4 = [...$arr1, ...$arr2];
// print_r($arr4);



// //combiine set 1st array as key and second as value
// $a = ["red", "green", "blue"];
// $b = ["banana", "avocado", "pineapple"];

// $c = array_combine($a, $b);
// print_r($c);


// //get keys from array
// $keys = array_keys($c);
// print_r($keys);

// //flips the values and keys
// $flipped = array_flip($c);
// print_r($flipped);



$numbers = range(1, 20);
print_r($numbers);


///Map works as in JS, just hav to add dependency in the end
$newNumbers = array_map(function ($num) {
    return "Number is $num";
}, $numbers);
print_r($newNumbers);


//Filter
$lessThan10 = array_filter($numbers, function ($num) {
    return $num < 10;
});
print_r($lessThan10);


$sum = array_reduce($numbers, fn ($carry, $num) => $carry + $num);

var_dump($sum);
