<?php 

//projects
$project_id = $_GET['project_id'];
$sql = "SELECT * FROM projects WHERE project_id = $project_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// attachments
$sql = "SELECT * FROM attachments WHERE project_id = $project_id";
$result = mysqli_query($conn, $sql);
?>

<!-- ---------------------------- Main Content ----------------------------- -->
<main>
    <?php include "templates/project.php" ?>
    <div class=container-project>
        <div class="container-contact">
            <div class="project-text">
                <h2> <?= $row["project_title"]; ?></h2>
                <p>  <?= $row["project_body"]; ?></p><br /> <br />        
                        

            </div>
            <div class="project-right">
                <div class="responsive-project"> <a href="img/<?= $row["project_picture"];?>"> <img src="img/<?= $row["project_picture"];?>" height="100%" width="100%"> </a> </div>
            </div>
            
            <div class="project-button">
                
           <?              
            $previous=mysqli_query($conn," SELECT * FROM projects WHERE project_id<$project_id order by project_id ASC ") ; 
                if($row=mysqli_fetch_array($previous)) { ?>
                     <a href="index.php?page_id=<?=$page_id?>&project_id=<?= $row['project_id']?>"> 
                     <button type="button" class="btn"> Terug </button><a>
                     <?     
                }
            ?>
            
            <?              
            $next=mysqli_query($conn," SELECT * FROM projects WHERE project_id>$project_id order by project_id ASC ") ; 
                if($row=mysqli_fetch_array($next)) { ?>
                     <a href="index.php?page_id=<?=$page_id?>&project_id=<?= $row['project_id']?>"> 
                     <button type="button" class="btn"> Volgende </button><a>
                     <?     
                }
            ?>
            </div>
        </div>
    </div>
</main>

