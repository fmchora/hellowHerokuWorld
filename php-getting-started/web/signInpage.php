<?
session_start();
if(isset($_SESSION['username'])){
    header("Location: my_items.php");
    die();
}
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/db.css">
    <title>Felipe Chora's Assignments</title>

</head>

<body>

<div id="big_wraper">
    <nav id="top_manu">

        <ul>

            <li> <a href="assignments.html "> CS 313 Assignments</a></li>

        </ul>

    </nav>


    <div id="main"> 


<h1>Sign up</h1>
        
<form id="mainForm" action="signIndb.php" method="POST">
    


    <label for="username">Username: </label>
	<input type="text" id="username" name="username"></input>
        
        <br />
        
    <label for="password">Password</label>
	<input type="password" id="password" name="password"></input>
	<br /><br />


<input type="submit" value="Login" />
    </form>
    </div>
</body>
</html>