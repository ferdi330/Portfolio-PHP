<?php 
$page_id = $_GET['page_id'];
$sql = "SELECT p.*, m.module_name 
FROM pages p 
LEFT JOIN modules m ON m.module_id = p.module_id 
WHERE p.page_id = $page_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- ---------------------------- Main Content ----------------------------- -->
<main>
  <div class="content">
    <div class="container-contact">
      <div class="contact-left">
        <h1><?= $row["page_name"]; ?></h1>
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
  <h1 class="opmaak_tekst_header"><?= $row["page_header"]; ?></h1>
    <div class="border-box">
     <p class="opmaak_tekst"><?= $row["page_content"]; ?></p>
    </div>
</div>


<!-- ---------------------------- 
  Wanneer je module update, moet de behorende module id geselecteerd zijn +
  je moet line breaks hebben bij het tekst uitlezen.
  
  projecten updaten net als tekst + uitlezen en downloads toevoegen.
 ------------------------------>
 