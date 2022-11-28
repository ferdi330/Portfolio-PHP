<?php 
$sql = "SELECT * FROM projects";
$result = mysqli_query($conn, $sql);
?>

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
<!-- ---------------------------- Main Content ------------------------------>
<div class="box">
  <div class="row">
    <?
      while($details = mysqli_fetch_assoc($result))
      {
        ?>
          <div class="box-01">
              <a class="dde" href="index.php?page_id=<?=$page_id?>&project_id=<?= $details['project_id']?>"> 
                  <img src="img/<?= $details['project_images']?>" class="projecten-image" alt="" />
              </a>
              <div class="a-project">
                &nbsp;
                <h3 class="centerp"><?= $details['project_title']?> </h3><br />
                  <p class="center">
                    <?= $details['project_body']?>
                    <a  href="index.php?page_id=<?=$page_id?>&project_id=<?= $details['project_id']?>"> Lees meer </a>
                </p>  
              </div> 
          </div>
       <?
      }
    ?>
  </div>
</div>
