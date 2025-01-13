<?php
header( "refresh:1;url=viewconsignment.php" );
include '../include/connection.php';

$todelete= mysqli_real_escape_string($con,$_GET["delete"]);

$result=mysqli_query($con,"DELETE FROM tracks WHERE id='$todelete'");
if ($result)
{
print "<script>
  alert('Deleted successfully!');
 </script>";
}
else
{
print "<script>
  alert('Error!');
 </script>";
}

?>