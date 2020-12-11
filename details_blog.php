<?php
include './components/db_connect.php';

if (isset($_POST['delete'])) {

	$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

	$sql = "DELETE FROM cards WHERE id = $id_to_delete";

	if (mysqli_query($conn, $sql)) {
		header('Location: ./blog.php');
	} else {
		echo 'query error: ' . mysqli_error($conn);
	}
}

// check GET request id param
if (isset($_GET['id'])) {

	// escape sql chars
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// make sql
	$sql = "SELECT * FROM cards WHERE id = $id";

	// get the query result
	$result = mysqli_query($conn, $sql);

	// fetch result in array format
	$place = mysqli_fetch_assoc($result);

	mysqli_free_result($result);
	mysqli_close($conn);
}

?>

<html lang="en">

<head>
	<title>Adventour | Blog</title>
	<?php include './components/header.php'; ?>
</head>

<body id="blog">
	<?php include './components/nav.php'; ?>
	<?php if ($place) { ?>
		<div class="contact-header">
			<h1><?php echo $place['ctitle']; ?> </h1>

		</div>
	<?php } ?>
	<div class="details-container12">
		<div class="card">
			<?php if ($place) { ?>
				<div>
					<img src="<?php echo("./assets/img/blog/cards/".$place['cimg']) ?>" alt="">
				</div>
				<h1><?php echo $place['ctitle']; ?></h1>
				<h2>Details:</h2>
				<p><?php echo $place['cdesc']; ?></p>

				<!-- DELETE FORM -->
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
					<input type="hidden" name="id_to_delete" value="<?php echo $place['id']; ?>">
					<input type="submit" name="delete" value="Delete" class="button delete-button2">
				</form>

			<?php } else { ?>
				<h2>No such place exists. Try Again</h2>
			<?php } ?>
		</div>
	</div>

	<?php include './components/footer.php'; ?>
</body>

</html>