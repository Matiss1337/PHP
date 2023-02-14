<?php
$numbers = [1, 2, 3, 4, 5];

print_r($numbers);
var_dump($numbers);
echo $numbers[1];

//asociate arrays

$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo $hex['red'];

$person = [
    "first_name" => "Matiss",
    "last_name" => "Judins",
    "email" => "matissj1337@gmail.com",
];

echo $person["first_name"];


$people = [
    $person,
    [
        "first_name" => "John",
        "last_name" => "Doe",
        "email" => "]
