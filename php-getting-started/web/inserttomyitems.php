<?php
session_start();
$my_item_id = $_POST['my_item_id'];
$quantity = $_POST['quantity'];
//$person_id = 1;


echo "$item_id\n";
echo "$quantity\n";

include 'dbaccess1.php';
        
try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	// First Add the Scripture
	$query = 'INSERT INTO my_items(person_id, my_item_id, quantity) VALUES(:person_id,:item_id, :quantity)';

	$statement = $db->prepare($query);

 	$statement->bindParam(':person_id', $_SESSION['person_id']);   
	$statement->bindParam(':item_id', $my_item_id);
	$statement->bindParam(':quantity', $quantity);

	$statement->execute();


}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: my_items.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.




?>
