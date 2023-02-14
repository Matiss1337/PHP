<?php
echo "hello";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
</head>

<body>
    <!-- You can output PHP including variables, etc -->
    <h1>Hello
        <?php echo 'Brad'; ?>
    </h1>
    <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
    <h1>Hello
        <?='Brad' ?>
    </h1>
</body>

</html>

<