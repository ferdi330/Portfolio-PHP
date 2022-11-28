<? 
 include "../includes/config.php";

    if(isset($_POST['submit'])){

    
        $username = (!empty($_POST['username'])) ? $_POST['username'] : '';
        $password = (!empty($_POST['password'])) ? $_POST['password'] : '';
        $firstname = (!empty($_POST['firstname'])) ? $_POST['firstname'] : '';
        $lastname = (!empty($_POST['lastname'])) ? $_POST['lastname'] : '';
        $mail = (!empty($_POST['mail'])) ? $_POST['mail'] : '';
        $phone = (!empty($_POST['phone'])) ? $_POST['phone'] : '';


        
        $user_id = $_GET['user_id'];
        $sql = "SELECT * FROM users WHERE user_id = $user_id";
        $result = mysqli_query($conn, $sql);

        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        $firstname = mysqli_real_escape_string($conn, $firstname);
        $lastname = mysqli_real_escape_string($conn, $lastname);
        $mail = mysqli_real_escape_string($conn, $mail);
        $phone = mysqli_real_escape_string($conn, $phone);

        $password = hash('sha256', $password);

        $query = 
        "UPDATE users SET
        user_name='$username', user_firstname='$firstname', user_lastname='$lastname', user_mail='$mail', user_phone='$phone' WHERE user_id = $user_id";

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($run) {
            
            $_SESSION['status'] = "User updated!";
            $_SESSION['status_text'] = "Succesfully updated";
            $_SESSION['status_icon'] = "success";
            header("Location: /schoolwerk/login/beheer/users.php");

        }else{

            $_SESSION['status'] = "User not Updated!";
            $_SESSION['status_text'] = "Error";
            $_SESSION['status_icon'] = "error";
            echo "Form not submitted";
        } 

    }
?>

