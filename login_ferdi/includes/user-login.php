<?
include "config.php";
if(isset($_POST['gebruikersnaam'])){
	$gebruikersnaam = $_POST['gebruikersnaam'];
	$wachtwoord = $_POST['wachtwoord'];
	$wachtwoord = hash('sha256', $wachtwoord);
	$gebruikersnaam = mysqli_real_escape_string($conn, $gebruikersnaam);
	$wachtwoord = mysqli_real_escape_string($conn, $wachtwoord);
	

	$query = "SELECT user_id, user_name, password FROM users WHERE user_name='$gebruikersnaam' AND password='$wachtwoord'";
	$result = mysqli_query($conn, $query);
	$data = mysqli_fetch_array($result);
	$user_id = $data['user_id'];

	if($user_id != ''){
		$_SESSION['user_id'] = $user_id;
		$query = "UPDATE users SET last_login=NOW() WHERE user_id = $user_id LIMIT 1";
		$result = mysqli_query($conn, $query);

		header("Location: /schoolwerk/login/beheer/users.php");            
	} else {
		header("Location: users.php?check=false");
	}
 }
  // Hash wachtwoord change / maak een insert pagina net als crud je kan er alleen op komen als je inlogt.
?>