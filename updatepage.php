<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Ticket Registration Form</title>
	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- //Custom-Files -->
	<style type="text/css">
		label{
			font-family: Times New Roman;
			font-size: 25px;
		}
		input{
			size: 40px;
            font-family: Times New Roman;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="main-top">
		<!-- header -->
<header>
<div class="container-fluid">
  <h1 class="logo text-center">
  <a href="index.html">Let's Go</a>
  </h1>
				<!-- menu -->
	<div class="nav-menus">
	<ul id="menu">
	<li>
	<input id="check02" type="checkbox" name="menu" />
	<label for="check02"><span class="fa fa-bars" aria-hidden="true"></span></label>
	<ul class="submenu">
	<li><a href="index.html">Home</a></li>
	<li><a href="show.php">Display Booking</a></li>
	<li><a href="" class="active">Ticket Booking</a></li>
	</ul>
	</li>
	</ul>
	</div>
				<!-- //menu -->
</div>
</header>
		<!-- //header -->
</div>
    <!-- Form -->
<section class="contact py-5">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="tittle text-center text-bl mt-5 mb-sm-5 mb-4" style="font-family: Times New Roman;font-size: 60px;color: lightsalmon;">Ticket Booking Form</h3>
		<div class="contact-form mx-auto text-center">
		<center><table border="2" cellspacing="3" cellpadding="5">
		<form method="post" action="ticketmaker.php" onsubmit="return validate()">
		<tr>
		<td><label>First Name:</label></td>
		<td><input type="text" name="first_name" placeholder="Enter your name" id="fname" required><br><br></td>
		 </tr>
		<tr>
		<td><label>Middle Name:</label></td>
		<td><input type="text" name="mname" placeholder="Enter your name" id="mname"><br><br></td>
		</tr>
		<tr>
		<td><label>Last Name:</label></td>
		<td><input type="text" name="lname" placeholder="Enter your name" id="lname"><br><br></td>
		</tr>
		<tr>
		<td><label>Age:</label></td>
		<td><input type="number" name="age" id="age"><br><br></td>
		</tr>
		<tr>
		<td><label>Gender:</label></td>
		<td><input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<br><br></td>
		</tr>
		<tr>
		<td><label>Email:</label></td>
		<td><input type="text" name="mail" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br><br></td>
		</tr>
		<tr>
		<td><label>Mobile:</label></td>
		<td><input type="text" name="number" placeholder="Enter your number" id="mobile" pattern="[0-9]{10}"><br><br></td>
		</tr>
		<tr>
		<td><label>Nation:</label></td>
	    <td><select id="n1" name="n1">
		<option value="India" selected>India</option>
		<option value="Amerika">Amerika</option>
		<option value="Japan">Japan</option>
		<option value="UK">UK</option>
		</select><br><br></td>
		</tr>
		<tr>
		<td><labeL>State:</labeL></td>
		<td><select id="s1" name="s1" onchange="change()">
		<option value="Maharashtra" selected>Maharashtra</option>
		<option value="Madya_Pradesh">Madya Pradesh</option>
		<option value="Karnataka">Karnataka</option>
	    <option value="Karnataka">Karnataka</option>
		<option value="Gujrat">Gujrat</option>
		<option value="Punjab">Punjab</option>
		<option value="Rajastan">Rajastan</option>
		</select><br><br></td>
		</tr>
		<tr>
		<td><label>City:</label></td>
		<td><select id="city" name="city">
		<option value="Jalgaon" selected>Jalgaon</option>
		</select><br><br></td>
		</tr>
		<tr>
		<td><label>Pin Code:</label></td>
		<td><input type="text" name="pincode" id="pc" placeholder="Enter your Pin Code"><br><br></td>
		</tr>
		<tr>
		<td><label>Date Of Journy:</label></td>
		<td><input type="text" name="dt" id="dt"><br><br></td>
		</tr>
		<tr>
		<td><label>Date of Return:</label></td>
		<td><input type="text" name="dd" id="dd"><br><br></td>
		</tr>
		<tr>
		<td><label>From*:</label></td>
		<td><input type="text" name="f" id="f" required><br><br></td>
		</tr>
	    <tr>
		<td><label>TO*:</label></td>
		<td><input type="text" name="t" id="t" required><br><br></td>
		</tr>
		<tr>
	    <td><label>No. of People Attending:</label></td>
	    <td><input type="number" name="np" id="np"><br><br></td>
	    </tr>
	    <tr>
		<td><label>Permanent Address:</label></td>
		<td><textarea rows="4" cols="30" placeholder="Enter your Permanent Address" id="t1" name="add"></textarea><br><br></td>
		</tr>
		<tr>
		<td><label>Payment Method:</label></td>
		<td><input type="radio" name="Payment" value="Phone-Pay">Phone-Pay
		<input type="radio" name="Payment" value="Google-pay">Google-Pay
		<input type="radio" name="Payment" value="SBI">SBI
		<input type="radio" name="Payment" value="Offline">Offline
		<br><br></td>
		</tr>
		<tr>
		<td><input type="submit" name="submit"></td>
		<td><input type="reset" name="reset"></td>
		</tr> 
		</form>
		</table></center>
		</div>
		</div>
	<i><p>Click on submit button and pay the bill and dowenload your ticket</p></i>
	</section>
	<!-- //Form-->
</body>
<script type="text/javascript">
	function validate(){		
		var fname=document.getElementById("fname");
		var mname=document.getElementById("mname");
		var lname=document.getElementById("lname");
		var age=document.getElementById("age");
		var g=document.getElementsByName("gender");
		var email=document.getElementById("email");
		var mobile=document.getElementById("mobile");
		var city=document.getElementById("city");
		var pin=document.getElementById("pc");
		var state=document.getElementById("s1");
		var nation=document.getElementById("n1");
		var doj=document.getElementById("dt");
		var dor=document.getElementById("dd");
		var from=document.getElementById("f");
		var to=document.getElementById("t");
		var pa=document.getElementById("np");
		var padd=document.getElementById("t1");
		var pay=document.getElementsByName("Payment");
		var c=0;

		if(fname.value.trim().length==0){
			alert("Enter your first name");
			return false;
		}
		else
			if(mname.value.trim().length==0){
			alert("Enter your Middle name");
			return false;
		}
		else
			if(lname.value.trim().length==0){
			alert("Enter your Last name");
			return false;
		}
		else
			if(age.value>110 || age.value==""){
			alert("Enter valid age");
			return false;
		}
		else{
			if(g[0].checked || g[1].checked){
		    }
		    else{
		    	alert("Select your gender");
			    return false;
		    }
	    }
		if(email.value.trim().length==0){
			alert("Enter your email");
			return false;
		}
		else
			if(mobile.value.trim().length==0){
			alert("Enter your mobile number");
			return false;
		}
		else
			if(pin.value.trim().length!=6 || pin.value.trim().length==0){
			alert("Enter your proper pin code");
			return false;
		}
		else
			if(doj.value.length==0 || dor.value.length==0){
			alert("Enter your Journy date or date of return");
			return false;
		}
		else
			if(pa.value.length==0 || pa.value<=0){
			alert("Enter no of people Attending");
			return false;
		}
		else
			if(from.value.trim().length==0 || to.value.trim().length==0){
			alert("Enter correct information");
			return false;
		}
		else
			if(padd.value.length==0){
			alert("Enter no Permanent Address");
			return false;
		}
		else{
			for(var r in pay){
				if(pay[r].checked)
					c=1;
			}
			if(c==0){
				alert("Select Payment Method");
				return false;
			}
		}

		alert("Registration Completed");
		return true;
	}

	function change(){
            var d=document.getElementById("s1").options.selectedIndex;
            var di=document.getElementById("s1").options[d].value;
            var c=document.getElementById("city");

            var mh=["Nashik","Buldhana","Jalgaon","Bhusawal","Mumbai","Motala","Panera","Shirdi","Pune","Khamgaon"];
            var mp=["Burhanpur","Indore","Bhopal","Shahapur","Jabalpur","Ujjain","Gwalior"];
            var k=["Bihar","Ballari","Bagalkot","Tumkur","Madikeri","Mangalor","Manipal"];
            var gu=["Ahmedabad","Anand","kheda","Surat","Rajkot","Vadodara","Patan","Nandiad","Navsari","vapi"];
            var pn=["Amritsar","Barnala","Bathinda","Jalindhar","Ludhiana","Firozpur"];
            var rj=["Ajmer","Alwar","Banswara","Jaipur","Jhodpur","Udaipur","Kota","Bikaner","Bhilwada"];
            
            if(di=="Maharashtra"){
                c.options.length=0;
                for(var ci of mh){
                  c.options[c.options.length]=new Option(ci);
                }
            }
            else
            if(di=="Madya_Pradesh"){
                c.options.length=0;
                for(var ci of mp){
                   c.options[c.options.length]=new Option(ci);  
                }
            }
            else
            if(di=="Karnataka"){
                c.options.length=0;
                for(var ci of k){
                  c.options[c.options.length]=new Option(ci);
                }
            }
            else
            if(di=="Gujrat"){
                c.options.length=0;
                for(var ci of gu){
                  c.options[c.options.length]=new Option(ci);
                }
            }
            else
            if(di=="Punjab"){
                c.options.length=0;
                for(var ci of pn){
                  c.options[c.options.length]=new Option(ci);
                }
            }
            else
            if(di=="Rajastan"){
                c.options.length=0;
                for(var ci of rj){
                   c.options[c.options.length]=new Option(ci);
                }
            } 
        }
</script>
</html>

<?php
$cnn=mysqli_connect("localhost","root","","travels");
$q="insert into booking values('NULL','$name','$mname','$lname','$gender','$age','$mail','$mobile','$nation','$state','$city','$pin','$dtj','$dtr','$from','$to','$pr','$nop','$paym');";
$f=mysqli_query($cnn,$q);
?>

UPDATE `booking` SET `id`='[value-1]',`fname`='[value-2]',`mname`='[value-3]',`lname`='[value-4]',`gender`='[value-5]',`age`='[value-6]',`mail`='[value-7]',`number`='[value-8]',`nation`='[value-9]',`state`='[value-10]',`city`='[value-11]',`pin`='[value-12]',`datejourny`='[value-13]',`datereturn`='[value-14]',`fcity`='[value-15]',`fto`='[value-16]',`address`='[value-17]',`nump`='[value-18]',`payment`='[value-19]' WHERE 1