<?php



/******************************/
// connecting to DB on XAMPP (local)

$username = 'UserAccount';
$password = 'vEDtLBzwl6mwkSxU';
$host = 'localhost:3307';
$dbname = 'WebAppProject';

/******************************/

$dsn = "mysql:host=$host;dbname=$dbname";

/** connect to the database **/
try 
{
   $db = new PDO($dsn, $username, $password);   
}
catch (PDOException $e)     // handle a PDO exception (errors thrown by the PDO library)
{
   // Call a method from any object, 
   // use the object's name followed by -> and then method's name
   // All exception objects provide a getMessage() method that returns the error message 
   $error_message = $e->getMessage();        
}
catch (Exception $e)       // handle any type of exception
{
   $error_message = $e->getMessage();
   echo "<p>Error message: $error_message </p>";
}
?>
