<?php
include './components/db_connect.php';
// Write Query
$sql = 'SELECT id, ctitle, cdesc, cimg FROM cards ORDER BY id';

// Make Query and get result
$result = mysqli_query($conn, $sql);

// Fetch resulting rows as an array
$cards = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result
mysqli_free_result($result);

// CLose connection
mysqli_close($conn);
?>
<html lang="en">

<head>
  <title>Adventour | Blog</title>
  <?php include './components/header.php'; ?>
</head>

<body id="blog">
  <?php include './components/nav.php'; ?>
  <div class="homepage">
    <!--<div class="bg"></div> -->

    <img src="./assets/img/Homepage.png" width="100%" alt="" class="frontImage" />
  </div>
  <a href="add_blog.php" class="add-button2">Add a Blog</a>
  <div class="explore-container">
    <?php foreach ($cards as $place) { ?>
      <div class="explore-card">
        <div class="card-image">
          <img src="<?php echo ("./assets/img/blog/cards/" . $place['cimg']) ?>" alt="">
        </div>
        <div class="card-content">
          <h1><?php echo htmlspecialchars($place['ctitle']); ?></h1>
          <p><?php
              if (strlen($place['cdesc']) <= 100) {
                echo htmlspecialchars($place['cdesc']);
              } else {
                echo htmlspecialchars(substr($place['cdesc'], 0, 100) . '...');
              }
              ?></p>

        </div>
        <div class="card-action">
          <a class="button card-details" href="details_blog.php?id=<?php echo $place['id'] ?>">Details</a>
        </div>
      </div>

    <?php } ?>
  </div>
  <?php include './components/footer.php'; ?>
</body>

</html>