<?php 
include "connectdb.php"; 

$sql = "SELECT * FROM details WHERE details_id";
$result = mysqli_query($conn, $sql);

?>



<?php include "templates/header.php"; ?>


<!-- ---------------------------- Main Content ----------------------------- -->
<main>
  <div class="content">
    <div class="container-contact">
      <div class="contact-left">
        <h1>Projecten</h1>
      </div>
      <div class="contact-right">
        <h2>Ferdi Ermis</h2>
        <p>Front-End Web Development &</p>
        <p>User Experience Design</p>
      </div>
    </div>
  </div>
</main>
<!-- ---------------------------- Main Content ----------------------------- -->

<div class="pad"></div> 
<div class="container_fer"></div>
     <?
        while($details = mysqli_fetch_assoc($result))
        {
          ?>
            <div class="row">
              <div class="box-01">
                <a class="dde" href="project.php?project_id= <?= $details["details_project"];?>"> <img src="img/<?= $details["details_picture"];?>" class="projecten-image" alt=""></a>
                    <h3 class="centerp"> <?= $details["details_title"]; ?></h3><br />
                    <p class="center">  <?= $details["details_body"]; ?></p>     
              </div>
            </div>
         <?
        }
      ?>     


<div class="marg"></div> 
<!-- ------------------------------- Footer -------------------------------- -->
<?php include "templates/footer.php"; ?>
</body>

</html>