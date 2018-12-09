
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/firstpage.css">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
body{
    text-align:center;
}

table,td,tr{
position:relative;
left:3%;
    text-align:left;
padding:20px 0;
    padding-right:60px;
}
h2{
position:relative;
left:-12%;
}
label{
display:block;
}
.tright{
position:relative;
left:-10%;
}
.btn{
    margin-right:5%;;
}
</style>
</head>

<body>
<div id="header">
<a href="firstpage.html"><img width="54" height="54" id="back" src="images\back.png" alt="firstpage.html"></a>
<img width="450" height="100" src="http://goweconnect.com/wp-content/uploads/2018/05/weconnect.png" class="custom-logo" alt="weConnect" itemprop="logo" />
</div>

<div id="check">

<form class="form1" method="GET" action="<?php echo $PHP_SELF;?>">
<h2>User Profile</h2>
<br/>



<div class="tabl">
<table>
<tr>
<td><label>Full Name</label><input class="form-control" id="name" name="name" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" title="Username should only contain letters. e.g. Piyush Gupta" autocomplete="" placeholder="Type your name here...">
</td>
<td><label>Job Description</label><input class="form-control" type="text" name="jd" id="tags" required="" placeholder="Type your job description...">
</td>
<td><label>Email</label><input class="form-control" type="email" name="email" required="" placeholder="Type your email address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
</td>
</tr>

<tr>
<td><label>Contact</label><input class="form-control" type="text" name="contact" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="" placeholder="Type your Mobile Number...">
</td>
<td><label>Status<label><input class="form-control" type="text" name="status" id="tags" required="" placeholder="Type your status...">
</td>
<td><label>Password</lable><input class="form-control" type="text" name="password" id="tags" required="" placeholder="Type your password...">
</td>
</tr>

<tr>
<td><label>Place</label><input class="form-control" type="text" name="place" id="designation" required="" placeholder="Type your place...">
</td>
</tr>
</table>
<div class="tright">
<br />
<a href=""><button class="btn btn-primary btn-md" type="Submit">Submit <i class="fa fa-fw fa-paper-plane"></i></button></a>
<a href=""><button class="btn btn-primary btn-md" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset </button></a>

</div>




</div>
</form>


</div>

<div id="footer">
<div class="cpy green"> Copyright &copy; 2018, All rights are reserved</div>
<div class="foot">
<span class="borderright"><a href="privacy.html">Privacy Policy</a></span>
<span class="padleft"><a href="terms.html">Terms and Condition</a></span>
</div>
</div>
</body>
</html>

<?php
    
    $name=$_GET['name'];
    $contact=$_GET['contact'];
    $place=$_GET['place'];
    $jd=$_GET['jd'];
    $email=$_GET['email'];
    $pass=$_GET['password'];
    
    $con=mysqli_connect("localhost","root","rp11200081","web");
    if(!$con)
    {
        die("connection failed:".mysqli_connect_error());
    }
    
    $sql="INSERT into profile(name,place,contact,jobdescription,email,password) VALUES ('$name', '$place', $contact,  '$jd', '$email', '$pass')";
    
    if (mysqli_query($con, $sql))
    {
        echo "New record created";
    }
    else{
        echo "Error: "  . mysqli_error($con);
    }
    
    
    ?>
