<?php include 'dbaccess1.php';?>

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
            <li> <a href="my_items.php"> My Items</a></li>

        </ul>

    </nav>


    <div id="main"> 
	
        <h1>Add Items</h1>
        
<form id="mainForm" action="insertItems.php" method="POST">

    <label for="item_id">Name</label>
	<input type="text" id="item_id" name="item_id"></input>
	<br /><br />

    <label for="quantity"> Quantity</label>
	<input type="text" id="quantity" name="quantity"></input>
	<br /><br />


   
	<input type="submit" value="Add to Database" />
    </form>
        
</div>
	
	</div>
</body>
</html>