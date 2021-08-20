<?php error_reporting(0); ?>
<?php
require('connect.php');
if(isset($_POST) & !empty($_POST)){
	$subject = mysqli_real_escape_string($connection, $_POST['subject']);
	$randomnumber= rand(1,1000000000000);
	$con  = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$ID = mysqli_real_escape_string($con,$_GET['ID']);
	$commentid = $randomnumber . $ID;
	$commentidmd5 = md5($commentid);
	$sql ="SELECT user_id from users WHERE user_name='$ID'";
	$result = mysqli_query($con, $sql) or die("BAd QUERy $sql");
	$row = mysqli_fetch_array($result);
	$user_id =$row['user_id'];
	$isql = "INSERT INTO comments ( subject, user_id,id) VALUES ('$subject','$user_id','$commentidmd5')";
	$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
	if($ires){
		$smsg = "Your Comment Submitted Successfully";
	}else{
		$fmsg = "Failed to Submit Your Comment";
	}

}
?>
<div class="panel panel-default">
<div class="panel-heading">Submit Your Comments</div>
  <div class="panel-body">
  	<form method="post">
 <div class="form-group">
	    <textarea name="subject" class="form-control" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>
<div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
<?php
$user_id =$row['user_id'];
$sql2 = "SELECT * FROM comments WHERE user_id='$user_id' ORDER BY submittime DESC";
$result2 = mysqli_query($con,$sql2) or die();
if(mysqli_num_rows($result2)>0){
	while($row2 = mysqli_fetch_array($result2)){
	echo '<div class="card flex-md-row mb-4 box-shadow h-md-250"><div class="card-body d-flex flex-column align-items-start">';
	echo "{$row2['subject']}";
	echo '</div></div>';
	if($ID == $_SESSION['user_name']){
	echo '<button class="btn "><a href="/delete.php?id=';
	echo $row2['id'];
	echo '">Delete</a></button>';
	}
	
	}
}
?>
	  </div>
  </div>
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
