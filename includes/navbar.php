<div class="navbar">
			<div class="logo_div">
				<a href="index.php"><h1>LifeBlog</h1></a>
			</div>
			<ul>
			  <li><a class="active" href="index.php">Home</a></li>
			  <li><a href="list_categories.php">List of posts</a></li>
			  <li><a href="login.php">Login</a></li>
			  <?php if ($_SESSION['user']['role'] == "Admin" ) { ?>
					<li><a href = "admin/dashboard.php">Dashboard</a></li>
				<?php
			}?>
			</ul>
		</div>