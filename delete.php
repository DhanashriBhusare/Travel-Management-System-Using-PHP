<?php
$cnn=mysqli_connect("localhost","root","","travels");
$id=$_GET['id'];
$q="delete from booking where id='$id'";
mysqli_query($cnn,$q);
echo "<script>window.location='show.php'</script>";
?>