<!DOCTYPE HTML>
<html>
<head>
<style>
body{
margin:1;
padding:0;
background:#7395AE;
background-image: url(netflix1.jpg);
background-size: cover;
}

.container{
top:50%;
left:50%;
position: absolute;
transform: translate(-50%,-50%);
color: black;
}
.card{
padding:60px 40px 50px 40px;
background: black;
border-radius: 20px;
color: white;
}
#name
{
width:200px;
border: none;
background: transparent;
border-bottom: 1px solid black;
padding: 6px;
margin-bottom: 20px;
color: white;
}
#button
{
border-radius: 20px;
padding: 10px 20px;
background: black;
color: white;
margin-top: 20px;
border: none;
outline: none;
margin-left: 50px;
}
a {
font-size: 14px;
display: inline-block;
color: dodgerblue;
}
.signup
{
font-size: 13px;
margin-left: 40px;
color: ghostwhite;
}
img
{
position: absolute;
margin-left: 100px;
margin-top: -40px;
margin-right: 5px;
border-radius: 100%;
}
#button{
cursor: pointer;
color: white;
box-shadow: 0 0 20px 9px #ff61241f;
background: red;
}

 	

.forgot
{
color:ghostwhite ;
}
</style>

</head>

<div class="container">
<img src="user.jpg" alt="User Image" height="70" width="70">
<div class="card">
<form action="verify.php" method="post">
<a class="Username">User Name:</a><br>
<input type="text" name="fname" id="name"><br>
<a class="Username">Email:</a><br>
<input type="text" name="femail" id="name"><br>
<a class="Password">Password:</a><br>
<input type="password" name="pwd1" id="name"><br>
<a href="#" class="forgot">Forgot Password?</a>
<a href="register.php" class="signup" id="signup">Sign Up</a><br>
<input type="Submit" value="Submit" id="button">
</div>
</div>
</form>
</body>
</html>