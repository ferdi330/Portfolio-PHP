<? 
 include "../includes/config.php";

    if(isset($_POST['submit'])){

        
        $naam = (!empty($_POST['page_name'])) ? $_POST['page_name'] :  '';
        $module = (!empty($_POST['module_id'])) ? $_POST['module_id'] : '';
        $content = (!empty($_POST['content'])) ? $_POST['content'] : '';
        $header = (!empty($_POST['header'])) ? $_POST['header'] : '';

            
        $page_id = $_GET['page_id'];
        $sql = "SELECT * FROM pages WHERE page_id = $page_id";
        $result = mysqli_query($conn, $sql);

        $naam = mysqli_real_escape_string($conn, $naam);
        $module = mysqli_real_escape_string($conn, $module);
        $content = mysqli_real_escape_string($conn, $content);
        $header = mysqli_real_escape_string($conn, $header);


        $query = 
        "UPDATE pages SET
        page_name='$naam', module_id='$module', page_content='$content', page_header='$header'
        WHERE page_id = $page_id";

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($run) {
            
            $_SESSION['status'] = "Page updated!";
            $_SESSION['status_text'] = "Succesfully updated";
            $_SESSION['status_icon'] = "success";
            header("Location: /schoolwerk/login/beheer/pages.php");

        }else{

            $_SESSION['status'] = "Page not Updated!";
            $_SESSION['status_text'] = "Error";
            $_SESSION['status_icon'] = "error";
            echo "Form not submitted";
        } 

    }
?>

