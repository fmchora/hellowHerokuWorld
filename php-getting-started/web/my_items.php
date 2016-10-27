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

        </ul>

    </nav>


    <div id="main"> 
	
        <h1>My items</h1>
<?php
        
try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	// prepare the statement
	$statement = $db->prepare('SELECT my_items.my_item_id, my_items.my_items_id, my_items.person_id, items.name, my_items.quantity FROM my_items 
    INNER JOIN items
    ON my_items.my_item_id=items.item_id
    ORDER BY items.name ASC');
	$statement->execute();

	// Go through each result
    
    echo '<table>';
    echo ' <tr> <th> Item </th> <th>Quantity</th> <th>Item ID</th></tr>';
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo ' <tr> <td>' . $row["name"] . '</td>';
		echo '<td>' . $row['quantity'] . '</td>' ;
        echo '<td>' . $row["my_items_id"] . '</td> </tr>';


		// put a newline out there just to make our "view source" experience better
		echo "\n";
	}
    echo '</table>';

}
catch (PDOException $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error connecting to DB. Details: $ex";
	die();
}

?>
        
        
        
        
            <h1>Delete items</h1>
        
<form id="mainForm" action="deletemyitems.php" method="POST">
    


    <label for="my_item_id">Item Id</label>
	<input type="text" id="my_item_id" name="my_item_id"></input>
	<br /><br />


<input type="submit" value="Delete Item" />
    </form>
        
        
            
        
        
        
    <h1>Add items to my Pantry</h1>
        
<form id="mainForm" action="inserttomyitems.php" method="POST">
    


    <label for="my_item_id">Item Id</label>
	<input type="text" id="my_item_id" name="my_item_id"></input>
	

    <label for="quantity"> Quantity</label>
	<input type="text" id="quantity" name="quantity"></input>
	<br /><br />

    

    <?php
    try
{
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        // prepare the statement
	$statement = $db->prepare('SELECT * FROM items');
	$statement->execute();

	// Go through each result
    echo '<table>';
    echo ' <tr> <th> Item ID </th> <th>Name</th></tr>';
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<tr> <td>' . $row["item_id"] ;
		echo  '</td>' . '<td>' . $row["name"] . '</td>';
        echo ' </tr>';

		// put a newline out there just to make our "view source" experience better
		echo "\n";
	}

}
catch (PDOException $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error connecting to DB. Details: $ex";
	die();
}

?>

<input type="submit" value="Add to My Pantry" />
    </form>
</div>




<h1>Add Items to the DataBase</h1>
        
<form id="mainForm" action="insertItems.php" method="POST">

    <label for="item_id">Name</label>
	<input type="text" id="item_id" name="item_id"></input>
	<br /><br />

   
	<input type="submit" value="Add to Database" />
    </form>


	
	</div>
</body>
</html>