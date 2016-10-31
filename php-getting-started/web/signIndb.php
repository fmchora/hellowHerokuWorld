<?php include 'dbaccess1.php';
$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

include 'dbaccess1.php';
        
try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$query = 'INSERT INTO person(username, password) VALUES(:username, :password)';

	$statement = $db->prepare($query);

	$statement->bindParam(':username', $username);

	// **********************************************
	// NOTICE: We are submitting the hashed password!
	// **********************************************
	$statement->bindParam(':password', $password);
	$statement->bindParam(':password', $password);

	$statement->execute();
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}


// finally, redirect them to the sign in page
header("Location: login.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>