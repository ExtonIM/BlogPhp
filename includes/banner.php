<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
<div class="banner">
	<div class="welcome_msg">
		<h1>Today's Inspiration</h1>
		<p> 
		    One day your life <br> 
		    will flash before your eyes. <br> 
		    Make sure it's worth watching. <br>
			<span>~ Gerard Way</span>
		</p>
		<a href="register.php" class="btn">Join us!</a>
	</div>
</div>
<?php } ?>