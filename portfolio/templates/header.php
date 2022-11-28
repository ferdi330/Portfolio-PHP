<?php 
$sql = "SELECT * FROM pages";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">   
<head>
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/projecten.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
</head>

<body>
    <!-- ------------------------------- header -------------------------------- -->
    <header>
        
        <a href="index.php?page_id=1">
            <h1 class="bb">Ferdi Ermis</h1>
        </a>
        <nav class="menu">
            <ul>
                <?
                  while($pages = mysqli_fetch_assoc($result)){
                      if($pages['page_id']!=1){
                          ?>
                              <li>
                                  <a href="index.php?page_id=<?= $pages['page_id']?>" class="bbb">
                                      <?= $pages['page_name']?>
                                  </a>
                              </li>
                          <?
                      }
                  }
                ?>   
            </ul>
        </nav>
    </header>