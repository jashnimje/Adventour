<?php 
    include './components/db_connect.php'; 
    // Write Query
    $sql = 'SELECT id, title, details, price, rating FROM places ORDER BY id';

    // Make Query and get result
    $result = mysqli_query($conn, $sql);

    // Fetch resulting rows as an array
    $places = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Free result
    mysqli_free_result($result);

    // CLose connection
    mysqli_close($conn);
?>

<html lang="en">

<head>
    <title>Adventour | Explore</title>
    <?php include './components/header.php'; ?>
</head>

<body id="explore">
    <?php include './components/nav.php'; ?>
    <section class="explore-home">
        <div class="explore-content">
            <h2>Dream<br>Trip</h2>
        </div>
    </section>
    <a href="add_place.php" class="add-button">Add a Place</a>
    <div class="explore-container">
        <?php foreach($places as $place) { ?>
        <div class="explore-card">
            <div class="card-image"></div>
            <div class="card-content">
                <h1><?php echo htmlspecialchars($place['title']); ?></h1>
                <p><?php 
                if (strlen($place['details']) <= 100) {
                    echo htmlspecialchars($place['details']);
                  } else {
                    echo htmlspecialchars(substr($place['details'], 0, 100) . '...');
                  }
                ?></p>

            </div>
            <div class="card-action">
                <a class="button card-details" href="details.php?id=<?php echo $place['id']?>">Details</a>
                <p class="rating">Rating: <?php echo $place['rating']?></p>
            </div>
        </div>

        <?php } ?>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>