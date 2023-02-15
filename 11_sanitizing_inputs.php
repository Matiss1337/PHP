<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// 1111
// sending data and receiving that data from link or form
// echo $_GET['name'];

// 2222
// issset check if button submit was pressed and only then echoes the data
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}




?>
<!-- just a link to something -->
<!-- <a href="<?php echo $_SERVER["PHP_SELF"]; ?>">Click</a> -->


<!-- 1111 -->
<!-- sending data  -->
<!-- <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?name=Matiss">Click</a> -->

<!-- 2222 -->
<!-- action is where the form is sent -->
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>