<?php     
    session_start(); 
    if (isset($_GET['logout'])) 
    {
        session_destroy();
        unset($_SESSION['name']);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" class="js csstransitions">
<head>
    <link rel="stylesheet" href="tutt.css">
<title>Movies/Series Website</title><meta charset="utf-8">

</head>
<body>
<div id="pagewrapper">
<div id="topbg"></div>
<div id="systemName">
<h1>Movies/Series Website</h1>
</div>
<div id="header">
<div id="mainmenu">
<header>
<div class="banner">
<img src="movlogo.jpg" alt="Logo" width="100" height="80"/>
<center><h1>GR's MOVIE/SERIES WEBSITE</h1></center>
<center><h2>The social network for film lovers.<h2></center>

    <nav class="navbar">
        <div class="navdiv">
            <ul>

<?php if (!isset($_SESSION['name'])){?>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
<?php }?>
<?php if (isset($_SESSION['name']))
{?>
<li style="colo:white;"><a href="index.php">Home</a></li>
<li><a href="mark_enter.php">Movie Ratings</a></li>
<li><a href="view_mark.php">View Ratings</a></li>
<li><a href="#">Movies</li>
 <li><a href="C:\oewe\exps\series.html">Series</li>
<li> <a href="index.php?logout='1'">Logout</a> </li>

<?php }?>
</ul>
</header>
</div>
</div>
<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) {?>
<div class="error success" >
<h3 style="color: green;">
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3></div>
<?php } ?>
</div>
<div id="content">
<h1>Welcome <?php
if (isset($_SESSION['name']))
{ echo
$_SESSION['name'];
}
?>
</h1>

</div>
    <p2>Trending searches</p2>
    <div class="movies">
        <div class="box">
          <img src="batman.jpg">
          <p>The Batman(2022)</p>
        </div>
        <div class="box">
          <img src="bladerunner.jpg">
          <p>Blade Runner 2049</p>
        </div>
        <div class="box">
          <img src="joker.jpg">
          <p>Joker(2019)</p>
        </div>
        <div class="box">
          <img src="FightClub.jpg">
          <p>Fight Club(1999)</p>
        </div>



    </div>

    <p2>Classics</p2>
    <div class="movies">
        <div class="box">
          <img src="americanpsycho.jpg">
          <p>American Psycho(2000)</p>
        </div>
        <div class="box">
          <img src="pulpfiction.jpg">
          <p>Pulp Fiction(1994)</p>
        </div>
        <div class="box">
          <img src="godfather.jpg">
          <p>The Godfather(1972)</p>
        </div>
        <div class="box">
          <img src="seven.jpg">
          <p>Se7en(1995)</p>
        </div>
    </div>
     <h3>Contact us</h3>
        <h4>Ph-no: 6969696969</h4>
        <h4>Insta: gunaranjan16</h4>
        <h4>Mail: gimmemovie@gmail.com</h4>


</body>
</html>