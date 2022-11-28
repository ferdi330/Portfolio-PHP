<? 
 include "../includes/config.php";
    if(isset($_POST['submit']) && !empty($_POST['submit']) ){
  
        if(!empty($_POST['username']) && !empty($_POST['password']) ){

            // Value is interwined with SQL parameters - meaning when $_POST gets pressed information will be sent to database.
            $username = (!empty($_POST['username'])) ? $_POST['username'] :  '';
            $password = (!empty($_POST['password'])) ? $_POST['password'] : '';
            $firstname = (!empty($_POST['firstname'])) ? $_POST['firstname'] : '';
            $lastname = (!empty($_POST['lastname'])) ? $_POST['lastname'] : '';
            $mail = (!empty($_POST['mail'])) ? $_POST['mail'] : '';
            $phone = (!empty($_POST['phone'])) ? $_POST['phone'] : '';


            // This function is used to create a legal SQL string that can be used in an SQL statement.
            $username = mysqli_real_escape_string($conn, $username);
            $password = mysqli_real_escape_string($conn, $password);
            $firstname = mysqli_real_escape_string($conn, $firstname);
            $lastname = mysqli_real_escape_string($conn, $lastname);
            $mail = mysqli_real_escape_string($conn, $mail);
            $phone = mysqli_real_escape_string($conn, $phone);


            // ENCRYPT WACHTWOORD
            $password = hash('sha256', $password);

            // QUERY INSERT DATABASE
            $query = "INSERT into users(user_name, password, user_firstname, user_lastname, user_mail, user_phone, last_login) 
            values('$username', '$password', '$firstname', '$lastname', '$mail', '$phone', now())";
            $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

            // If statement $RUN = checked of de connectie werkt met mysql
            if($run) {
                
                $_SESSION['status'] = "User Added!";
                $_SESSION['status_text'] = "Succesfully added";
                $_SESSION['status_icon'] = "success";
                header("Location: /schoolwerk/login/beheer/users.php");

            }else{

                $_SESSION['status'] = "User not Added!";
                $_SESSION['status_text'] = "Error";
                $_SESSION['status_icon'] = "error";
            } 
        }
    }
?>

