<?php
$name=$_POST["first_name"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$mail=$_POST["mail"];
$mobile=$_POST["number"];
$nation=$_POST["n1"];
$state=$_POST["s1"];
$city=$_POST["city"];
$pin=$_POST["pincode"];
$dtj=$_POST["dt"];
$dtr=$_POST["dd"];
$from=$_POST["f"];
$to=$_POST["t"];
$pr=$_POST["add"];
$nop=$_POST["np"];
$paym=$_POST["Payment"];
$cnn=mysqli_connect("localhost","root","","travels");
$q="insert into booking values('NULL','$name','$mname','$lname','$gender','$age','$mail','$mobile','$nation','$state','$city','$pin','$dtj','$dtr','$from','$to','$pr','$nop','$paym');";
$f=mysqli_query($cnn,$q);
echo mysqli_error($cnn);

if($f){
    echo"<script>window.alert('Data Inserted');</script>";
}
else{
    mysqli_connect_error();
    echo "Error ";
}
?>
<html>
    <head>
    <style>
        table{
            padding:10px;
        }
        td{
            border:none;
        }
    </style>
    </head>
    <body>
        <center><h1>Ticket</h1>
        <table border="2">
            <tr>
                <td>
                <label>Name:</label>
                </td>
                <td>
                <label><?php echo" $name $mname $lname";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Age:</label>
                </td>
                <td>
                <label><?php echo"$age";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Gender:</label>
                </td>
                <td>
                <label><?php echo" $gender";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Email:</label>
                </td>
                <td>
                <label><?php echo" $mail";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Mobile:</label>
                </td>
                <td>
                <label><?php echo" $mobile";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Nation:</label>
                </td>
                <td>
                <label><?php echo"$nation";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Sate:</label>
                </td>
                <td>
                <label><?php echo" $state";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>City:</label>
                </td>
                <td>
                <label><?php echo" $city";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Pin Code:</label>
                </td>
                <td>
                <label><?php echo" $pin";?></label>
            </td>
            </tr>
            <tr>
                <td>
                <label>Date Of Journy:</label>
                </td>
                <td>
                <label><?php echo" $dtj";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Date Of Return:</label>
                </td>
                <td>
                <label><?php echo" $dtr";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>From:</label>
                </td>
                <td>
                <label><?php echo" $from";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>To:</label>
                </td>
                <td>
                <label><?php echo" $to";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Number Of People:</label>
                </td>
                <td>
                <label><?php echo" $nop";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Permanent Address:</label>
                </td>
                <td>
                <label><?php echo" $pr";?></label>
                </td>
            </tr>
            <tr>
                <td>
                <label>Payment Mode:</label>
                </td>
                <td>
                <label><?php echo" $paym";?></label>
            </td>
            </tr>
        </table></center>
       <center> <p>Happy Journy !</p></center>
    </body>
</html>