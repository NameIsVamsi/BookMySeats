<?php
    $connect = mysqli_connect("localhost","root","","test");
    $sql  = "SELECT * FROM movie" ;
    $result = mysqli_query($connect,$sql);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book My Seats</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
	<nav>
		<div class="navbar">
			<img src="Movies/movie.png" height="60" width="60">
			<h1>BookMySeats</h1>
			<form action="/action_page.php">
     		 <input type="text" placeholder="Search movies.." 	name="search">
  			</form>
  			<button>Sign in</button>
  			<p>Location</p>
		</div>
	</nav>

	<div class="movie-board">
		<div class="movie-board-child1">
			<img src="Movies/wonderwoman1.jpg">
			<p class="availability">Available</p>
		</div>
		<div class="movie-board-child2">
            <img src="Movies/play.png">
            <?php
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result))
                    {
            ?>
			<p>PREMIERE</p>
			<p><?php echo $row["title"];?></p>
			<span class="movie-type">2D, MX4D, IMAX 3D, D-BOX</span>
			<p class="movie-language"><?php echo $row["language"];?></p>
		</div>
    </div>
    <?php } } ?>
</body>
</html>