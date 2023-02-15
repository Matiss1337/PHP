<?php

$file = 'extras/users.txt';



if (file_exists($file)) {
  //open file and read contents
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  //then close file
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  //PHP_EOL - end of line creates a new line
  $contents = "Matiss" . PHP_EOL . "Katrina" . PHP_EOL . "Jen";
  //write and then colse file
  fwrite($handle, $contents);
  fclose($handle);
}


// // Open file for reading
// if (file_exists($file)) {
//   echo readfile($file);
// };


/*
r	- Open a file for read only. File pointer starts at the beginning of the file
w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	- Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -	Open a file for read/write. File pointer starts at the beginning of the file
w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
*/