<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$person_id = 1;


echo "$username";
echo "$password";
echo "\n";

include 'dbaccess1.php';
        
try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $query = 'SELECT password, person_id FROM person WHERE username=:username';
    
    $statement = $db->prepare($query);
    $statement->bindParam(':username', $username);

		$result = $statement->execute();
 $row = $statement->fetch(PDO::FETCH_ASSOC);
	
		 echo $row['password'];

    
        echo $row['person_id'];
 

    echo '</br>';
    echo 'user passwprd ' . "$password";
      echo '</br>';
    echo 'data base password ' . $row['password'];
      echo '</br>';
    print_r($row);
    
    if(strcmp($row['password'], $password))
    {
    
        $_SESSION['username'] = $username;
        $_SESSION['person_id'] = $row['person_id'];
        
        echo $_SESSION['username'];
        echo $_SESSION['person_id'];
        
        header("Location: my_items.php");
        die(); 
    }
   else
   {
        echo 'ya valiste compa';  
        //echo 'ya valiste compa'; 
       //header("Location: login.php");
      // die();
   }


       
	}
	catch (Exception $ex)
	{
		// Please be aware that you don't want to output the Exception message in
		// a production environment
		echo "Error with DB. Details: $ex";
       // header("Location: login.php");
		die();
	}



?>
