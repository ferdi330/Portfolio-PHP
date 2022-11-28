<?
  /* Maak de connectie string voor MySQL */
  $host = 'localhost';
  $dbname = 'velisoft-plk_ferdi';
  $username = 'velis_ferdi';
  $password = 'Ab7wj29';

	$conn = new mysqli($host, $username, $password, $dbname);
	// Check connection
	  if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
  }
  session_start();
?>