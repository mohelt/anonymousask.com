<?php
require_once("menu_logged_in.php");

$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<div class="container d-flex align-items-center flex-column">
                <h1 class="masthead-heading mb-0">...</h1>
				<h1 class="masthead-heading mb-0">...</h1>
				<h1 class="masthead-heading mb-0">...</h1>
				<h1 class="masthead-heading mb-0">Share Your Link to get more Questions!</h1>
				
				<div class="input"><a href="<?php echo $url;?>">
				<?php echo $url;?></a></div>
				</div>
				
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
<?php
include 'comments.php';
?>
	  </div>
  </div>

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="index.php?logout">Logout</a>
<?php
require_once("footer.php");
?>
