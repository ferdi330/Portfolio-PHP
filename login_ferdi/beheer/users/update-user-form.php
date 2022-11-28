<? include "../includes/header_cms.php";?>
<main>
   <div class="main_inlog">
     <?php include "read-page.php";?>  
        <div class="container">
          <h2 class="text-info-h3">Update Page</h2>
            <form name="update" action="update-pages.php?page_id=<?= $row["page_id"]; ?>" method="post" onsubmit="return required()">
                     <? include "pages-form.php";?>
                    <input type="submit" name="submit" class="btn btn-primary"  value="Save">
                    <input type="hidden" name="id" value="<?= $row["pages_id"]; ?>">
            </form>
        </div>
    </div>
</main> 
 <? include "../includes/footer.php" ?>
 
 <script>
    
    function required()
    {
    var empt = document.forms["username"]["username"][""].value;
    if (empt == "")
    {
    alert("Please input a Value");
    return false;
    }
    else 
    {
    alert('Form has been submitted');
    return true; 
    }
    }
 </script>