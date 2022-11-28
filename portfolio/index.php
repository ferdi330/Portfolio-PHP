<? include "connectdb.php";?>
<? include "templates/header.php";?>

<!--  Main Content -->
    
<?php 
$page_id = $_GET['page_id'];
$sql = "SELECT * FROM pages WHERE page_id = $page_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$module_id = $row['module_id'];

?>

<!--  je moet project.php openen als er een project id is --->
<? 
      
        if($module_id == 1){
            include "home.php";  
        } elseif($module_id == 2 && $_GET['project_id'] != 0){
             include "project.php";
        } elseif($module_id == 2){
                include "projecten.php";    
        } elseif($module_id == 3){
            include "contact.php";   
        } elseif($module_id == 4){
            include "tekst.php";   
        }
?>    
  <?
     /*
      Net zoals bij project.details haal je basis van de page.id de gegevens op van de pages
      met de module, bepaal je welke pagina wordt uitgeleverd.       
      */
      ?>
<!-- ------------------------------- Footer -------------------------------- -->
<? include "templates/footer.php";?>
</body> 
</html>
