<?php 
    include './components/db_connect.php'; 
    $title = $details = $price = $rating = '';
    $errors = array('title' => '', 'details' => '', 'price' => '', 'rating' => '', 'fname' => '');

    include './components/upload.php'; 
    if(isset($_POST['submit'])){
        
        // Check title
        if(empty($_POST['title'])){
            $errors['title'] = 'A title is required';
        } else{
            $title = $_POST['title'];
        }

        // Check details
        if(empty($_POST['details'])){
            $errors['details'] = 'Some details are required';
        } else{
            $details = $_POST['details'];
        }

        // Check price
        if(empty($_POST['price'])){
            $errors['price'] = 'A pricing is required';
        } else{
            $details = $_POST['price'];
        }

        // Check rating
        if(empty($_POST['rating'])){
            $errors['rating'] = 'A rating is required';
        } else{
            $details = $_POST['rating'];
        }

        if(array_filter($errors)){
            //echo 'errors in form';
        } else {
            //echo 'form is valid';
            $title = mysqli_real_escape_string($conn, ucwords($_POST['title']));
            $details = mysqli_real_escape_string($conn, $_POST['details']);
            $price = mysqli_real_escape_string($conn, $_POST['price']);
            $rating = mysqli_real_escape_string($conn, $_POST['rating']);
            $fname = mysqli_real_escape_string($conn, $fname);
            
            // insert data
            $sql = "INSERT INTO places(title, details, price, rating, fname) VALUES ('$title', '$details', '$price', '$rating', '$fname')";

            if(mysqli_query($conn, $sql)) {
                // Success
                header('Location: ./explore.php');
            } else {
                // Error
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    } // end POST check
?>

<html lang="en">

<head>
    <title>Adventour | Explore</title>
    <?php include './components/header.php'; ?>
</head>

<body id="explore">
    <?php include './components/nav.php'; ?>

    <section class="add-container">
        <h1>Add a Place</h1>
        <div class="card">

            <form class="add-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data"
                method="POST" autocomplete="off">
                <input type="text" placeholder="Place Name" name="title" value="<?php echo htmlspecialchars($title) ?>" required autocomplete="off">
                <div class="red-text"><?php echo $errors['title']; ?></div>

                <textarea class="details" type="text" placeholder="Details" rows="5" name="details"
                    value="<?php echo htmlspecialchars($details) ?>"></textarea>
                <div class="red-text"><?php echo $errors['details']; ?></div>

                <input type="text" placeholder="Price" name="price" value="<?php echo htmlspecialchars($price) ?>" required autocomplete="off">
                <div class="red-text"><?php echo $errors['price']; ?></div>

                <input type="text" placeholder="Rating" name="rating" value="<?php echo htmlspecialchars($rating) ?>" required autocomplete="off">
                <div class="red-text"><?php echo $errors['rating']; ?></div>

<!-- Code to include place image in database -->
                <input type="file" name="fileToUpload" id="fileToUpload">
                <div class="red-text"><?php echo $errors['fname']; ?></div>

                <input type="submit" name="submit" value="Submit" class="button">
            </form>
        </div>
    </section>

    <?php include './components/footer.php'; ?>
</body>

</html>