<?php
$cnn=mysqli_connect("localhost","root","","travels");
$p="select * from booking";
$res=mysqli_query($cnn,$p);
echo"<center><h1> All Registered Tickets </h1></center>";
echo "<center><table border='1' cellspacing='3' cellpadding='5'>";
echo"<tr><th>Id</th><th>Name</th><th>Gender</th><th>Age</th><th>Mail</th><th>Number</th><th>Nation</th><th>NameState</th><th>City</th><th>Pin Code</th><th>Date_Of_Journy</th><th>Date_Of_Return</th><th>From</th><th>To</th><th>Adress</th><th>NO of Pecengers</th><th>Payment</th><th>Delete</th><th>Update</th></tr>";
while($row=mysqli_fetch_row($res)){
    echo"<tr><td>".$row[0]."</td><td>".$row[1]." ".$row[2]." ".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td><td>".$row[18]."</td><td><a href='delete.php?id=".$row[0]."'>Delete</a></td><td><a href='update.php?id=".$row[0]."'>Update</a></td></tr>";
}
echo"</table></center>";
?>