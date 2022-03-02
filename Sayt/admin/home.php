<?php include('header.php'); ?>
	<h1>Categories</h1>
	<form method="post" action="addcat.php">
		<input type="text" name="am" placeholder="Am name">
		<input type="text" name="ru" placeholder="Ru name">
		<input type="text" name="en" placeholder="En name">
		<button>Add</button>
	</form>
	<hr>
	<?php
		$q = $DB->query("SELECT * FROM cat ORDER BY id DESC");
		while($row=mysqli_fetch_array($q)){
			echo "<form class='line' action='updatecat.php' method='post'>";
			echo "<input name='id' type='hidden' value='".$row['id']."'>";
			echo "<input name='am' type='text' value='".$row['am_name']."'>";
			echo "<input name='ru' type='text' value='".$row['ru_name']."'>";
			echo "<input name='en' type='text' value='".$row['en_name']."'>";
			echo "<a href='delcat.php?id=".$row['id']."''><input class='rbtn' type='button' value='Delete'></a>";
			echo "<button class='rbtn'>Update</button>";
			// echo $row['am_name'];
			echo "</form>";
		}

	?>
<!-- <?php
// echo $_COOKIE['admin'];
?>
 -->

<?php include("footer.php"); ?>
