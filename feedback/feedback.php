<?php include "./inc/header.php"; ?>

<?php
// Connect to database
$sql = "SELECT * FROM feedback";
// you need conection which is in the header and DB name
$result = mysqli_query($conn, $sql);
// fetch data as an associative array
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>







<h2>Feedback</h2>

<!-- include logic like this -->
<?php if (empty($feedback)) : ?>
  <p class="lead text-center">No feedback yet</p>
<?php endif; ?>


<!-- logic is wraped -->
<?php foreach ($feedback as $feedback) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $feedback['body']; ?>
      <div class="ext-secondary mt-2">
        By <?php echo $feedback['name']; ?> on <?php echo $feedback['date']; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>


<?php include "./inc/footer.php"; ?>