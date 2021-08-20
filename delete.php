<?php error_reporting(0); ?>
<?php
include "views/connect.php"; // Using database connection file here
 // get id through query string
$id = mysqli_real_escape_string($connection,$_GET['id']);
$del = mysqli_query($connection,"delete from comments where id = '$id'");
if($del)
{
    mysqli_close($connection); // Close connection
    header('location:index.php?'.$username); // redirects to all records page
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>