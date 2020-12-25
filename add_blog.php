<?php
include './components/db_connect.php';
$title = $details = '';
$errors = array('title' => '', 'details' => '', 'fname' => '');

include './components/uploadblog.php';
if (isset($_POST['submit'])) {

    // Check title
    if (empty($_POST['title'])) {
        $errors['title'] = 'A title is required';
    }

    // Check details
    if (empty($_POST['details'])) {
        $errors['details'] = 'Some details are required';
    }

    if (array_filter($errors)) {
        //echo 'errors in form';
    } else {
        //echo 'form is valid';
        $title = mysqli_real_escape_string($conn, ucwords($_POST['title']));
        $details = mysqli_real_escape_string($conn, $_POST['details']);
        $fname = mysqli_real_escape_string($conn, $fname);

        // insert data
        $sql = "INSERT INTO cards(ctitle, cdesc, cimg) VALUES ('$title', '$details','$fname')";

        if (mysqli_query($conn, $sql)) {
            // Success
            header('Location: ./blog.php');
        } else {
            // Error
            echo 'Error: ' . mysqli_error($conn);
        }
    }
} // end POST check
?>

<html lang="en">

<head>
    <title>Adventour | Blog</title>
    <?php include './components/header.php'; ?>
</head>

<body id="blog">
<?php include './components/nav.php'; ?>

<section class="add-container12">
    <h1>Add your blog</h1>
    <div class="card">

        <form class="add-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="POST"
              autocomplete="off">
            <input type="text" placeholder="Name of place You travelled with us.." name="title"
                   value="<?php echo htmlspecialchars($title) ?>" required autocomplete="off">
            <div class="red-text"><?php echo $errors['title']; ?></div>

            <textarea class="details" type="text" placeholder="Your Experience.." rows="10" name="details"
                      value="<?php echo htmlspecialchars($details) ?>"></textarea>
            <div class="red-text"><?php echo $errors['details']; ?></div>

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