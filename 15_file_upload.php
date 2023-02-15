<?php
/* ----------- File upload ---------- */


//to upload u need a folder 1st
// allowed formats
$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

if (isset($_POST['submit'])) {
    // Check if file was uploaded
    if (!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/$file_name";
        // Get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        // echo $file_ext;


        //couple steps here with if statements
        //first we check if the file is empty
        //if text format is allowed we proceed
        //if file size is less than 1mb we proceed
        //if all is good we move the file to the uploads folder

        if (in_array($file_ext, $allowed_ext)) {
            // Validate file size
            if ($file_size <= 1000000) { // 1000000 bytes = 1MB
                // Upload file by moving from temp position to target directory
                move_uploaded_file($file_tmp, $target_dir);

                // Success message
                echo '<p style="color: green;">File uploaded!</p>';
            } else {
                echo '<p style="color: red;">File too large!</p>';
            }
        } else {
            $message = '<p style="color: red;">Invalid file type!</p>';
        }
    } else {
        $message = '<p style="color: red;">Please choose a file</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo htmlspecialchars(
                        $_SERVER['PHP_SELF']
                    ); ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>