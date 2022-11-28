<? include "../includes/header_cms.php";?>
<main>
   <div class="main_inlog_border">
     <?php include "read-user.php";?>  
        <div class="container">
          <h2 class="text-info-h3">Update user</h2>
            <form name="update" action="update-user.php?user_id=<?= $row["user_id"]; ?>" method="post" onsubmit="return required()">
                     <? include "user-form.php";?>
                    <input type="submit" name="submit" class="btn btn-primary"  value="Save">
                    <input type="hidden" name="id" value="<?= $row["user_id"]; ?>">
            </form>
        </div>
    </div>
</main> 
 <? include "../includes/footer.php" ?>
 
 <script>
    
    function required()
    {
       var empt = $('input[name=username]').val();
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