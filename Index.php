<?php 
include 'Instituationheader.php';
include 'connect.php';
$sql2="select max(id) 'id' from tblenquery2";
$res=$con->query($sql2);
$row=$res->fetch_assoc();
$id=$row['id'];
$id++;
$eq=date('d').date('m').date('y').$id;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Instituation.css">
</head>
<body>
	<div>
      <div class="c3">
    	<div class="c4">
    		<h1 style="text-align:center;margin-top:10px"><b>PROGRAMMING CLASSES</b></h1>
    		<p style="font-size:40px;margin-left:20px">BEST IT TRANING INSTITUTE IN PATNA</p>
    		 <div class="c5">
    		
    			<br>
    			<p>+ IT Experts as Trainers</p>
                <br>
                <br>
    			<p>+ Affordable course Fees</p>
    			<br>
                <br>
    			<p>+ Browse for All Courses</p>
    		   <div class="c6">
    			<br>
    			<p>+ Pay Online & Get Receipt</p>
    			<br>
                <br>
    			<p>+ Apply/Check Certificate Details</p>
                <br>
    			<p>+ Online Classes</p>
    			</div>
    		</div>
    	</div>  
    </div>
     <div class="c7">
    	<div class="c8">
    		<p style="font-size:25px;text-align: center;"><b>THIS ENQUIRY WILL CHANGE YOUR CAREER</b></p>
    		<div class="c9">
    		<form method="post">
    			<input type="text" name="txtname"placeholder="Enter your Name" class="firm">
    			<br><br>
    			<input type="number" name="phno" placeholder="Enter your Phone Number" class="firm">
    			<br><br>
    			<input type="Email" name="txtemail"placeholder="Enter your email" class="firm">
    			<br><br>
    			<select class="firm" name="txtcourse">
    				<option>C</option>
    				<option>C++</option>
    				<option>Java</option>
    				<option>Web Development</option>
    				<option>C,C++,Java</option>
    				<option>C,C++,Web Development</option>
    			</select>
    			<br><br>
    			<input type="submit" name="btnsubmit" class="firm">
    		</form>
    		</div>
    	</div>
    </div>
   </div>
</body>
</html>
<?php
include'Instituationfooter.php';
 if(isset($_POST['btnsubmit']))
 {
     $n=$_POST['txtname'];
     $pno=$_POST['phno'];
     $mail=$_POST['txtemail'];
     $cor=$_POST['txtcourse'];
     $sql="insert into tblenquery2(stuid,name,phno,email,course) values('$eq','$n','$pno','$mail','$cor')";
     $con->query($sql);
 }
?>
