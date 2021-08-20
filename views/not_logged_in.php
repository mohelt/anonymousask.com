
<?php
require_once("menu.php");
?>

            <div class="container d-flex align-items-center flex-column">
				</div>
                <!-- Icon Divider-->
<h1 class="masthead-heading mb-0">...</h1>
<h1 class="masthead-heading mb-0">...</h1>
<br></br>
		<?php
if(isset($_GET['ID'])){
	$con  = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$ID = mysqli_real_escape_string($con,$_GET['ID']);
	$sql ="SELECT * from users WHERE user_name='$ID'";
	$result = mysqli_query($con, $sql) or die("BAd QUERy $sql");
	$row = mysqli_fetch_array($result);
	include("views/comments.php");
	}?>
	<div class="col-lg-8 mx-auto">
            <div class="mb-4"></div></div><!-- Icon Divider-->
                <div class="divider-custom divider-light"></div>
	<header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <h1 class="masthead-heading mb-0">AnonymousAsk</h1>
				<p class="masthead-subheading font-weight-light mb-0">Step 1: Make an Account. </br>Step 2: Share your account link to your socials. </br>Step 3: Get anonymous questions/comments from your friends!</p>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
<!-- login form box -->
<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label></br>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required> </br>

    <label for="login_input_password">Password</label></br>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required /></br>

    <input type="submit"  name="login" value="Log in" /></br>
</form>
                </div>
                <!-- Masthead Subheading-->
<a class="btn btn-xl btn-outline-light" href="register.php">
                        <i class=" mr-2"></i>
                        Register New Account
                    </a>
                <p class="masthead-subheading font-weight-light mb-0">Ask - Answer - Share</p>
				
                
			</div>
        </header>
<?php
require_once("footer.php");
?>


