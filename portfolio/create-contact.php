<?php

$link = mysqli_connect("localhost", "velis_ferdi", "Ab7wj29", "velisoft-plk_ferdi");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$voornaam = mysqli_real_escape_string($link, $_POST['voornaam']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$onderwerp = mysqli_real_escape_string($link, $_POST['onderwerp']);
$bericht = mysqli_real_escape_string($link, $_POST['bericht']);


$sql = "INSERT INTO contactformulier (voornaam, email, onderwerp, bericht) VALUES ('$voornaam', '$email','$onderwerp', '$bericht')";
$result = mysqli_query($link, $sql);

if(isset($_POST['submit'])){
    
    //$to = "ferdi_ermis@outlook.com";
    //$subject = $onderwerp;
    //$message = $voornaam;
    
    
    $to = "ferdi_ermis@outlook.com";
    $subject = $onderwerp;
    
    $message = "
    <html>
    <head>
    <title>To you</title>
    </head>
    <body>
    <p>This email contains your message!</p>
    <table>
    <tr>
    <th>Voornaam:</th>
    </tr>
    <tr>
    <td>$voornaam</td>
    </tr>
    <tr>
    <th>Kopie bericht:</th>
    </tr>
    <tr>
    <td>$bericht</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: $email' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";
    
    mail($to,$subject,$message,$headers);

    mysqli_close($link);
    header("Location: index.php?page_id=1");
}





// mail($to, $subject, $message) - dit maken zodat je een bevestiging krijgt.
// meerdere documenten kunnen koppelen aan download knop

?>

