<nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top bg-primary">
	<div class="container">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="index.php">News Group</a>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item <?php if($page=='home') echo 'active' ?>">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item <?php if($page=='developers') echo 'active' ?>">
					<a class="nav-link" href="developers.php">Developers</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<?php 
					if( isset($_SESSION['username']) ){
				?>
				<li class="nav-item">
					<a class="nav-link" href="profile.php"> <?php echo $_SESSION['username'];?> </a>
				</li>
				<li class="nav-item <?php if($page=='favourites') echo 'active' ?>">
					<a class="nav-link" href="favoutires.php">Favourites</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>

				<?php
					}
					else {
					echo '
					<li class="nav-item '; if($page=="register") echo 'active'; echo'">
					<a class="nav-link" href="register.php">Register</a>
					</li>';
					}  
				?>
			</ul>
		</div>
	</div>
</nav>

<?php
/*Only for debugging purposes.*/
if($DEBUG == 1){
	echo '
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h5>Server Log:</h5>
		<p>';
			if( isset($sl) ){
				echo $sl;
				unset($sl);
			}
	echo'
		</p>
	</div>';
}
?>