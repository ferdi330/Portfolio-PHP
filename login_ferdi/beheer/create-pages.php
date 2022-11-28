<? 
 include "../includes/config.php";
    if(isset($_POST['submit']) && !empty($_POST['submit']) ){
  
        if(!empty($_POST['page_name']) && !empty($_POST['module_id']) ){

            // Value is inter-wined with SQL parameters - meaning when $_POST gets pressed information will be sent to database.
            $naam = (!empty($_POST['page_name'])) ? $_POST['page_name'] :  '';
            $module = (!empty($_POST['module_id'])) ? $_POST['module_id'] : '';
            $content = (!empty($_POST['content'])) ? $_POST['content'] : '';
            $header = (!empty($_POST['header'])) ? $_POST['header'] : '';



            // This function is used to create a legal SQL string that can be used in an SQL statement.
            $naam = mysqli_real_escape_string($conn, $naam);
            $module = mysqli_real_escape_string($conn, $module);
            $content = mysqli_real_escape_string($conn, $content);
            $header = mysqli_real_escape_string($conn, $header);


            

            // QUERY INSERT DATABASE
            $query = "INSERT into pages(page_name, module_id, page_header, page_content)
            values('$naam', '$module','$header', '$content')";
            $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

            // If statement $RUN = checked of de connectie werkt met mysql
            if($run) {
                
                $_SESSION['status'] = "Page Added!";
                $_SESSION['status_text'] = "Succesfully added";
                $_SESSION['status_icon'] = "success";
                header("Location: /schoolwerk/login/beheer/pages.php");

            }else{

                $_SESSION['status'] = "`Page` not Added!";
                $_SESSION['status_text'] = "Error";
                $_SESSION['status_icon'] = "error";
            } 
        }
    }
?>

