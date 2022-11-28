<? include "../includes/header_cms.php";?>
<main>
   <div class="main_inlog_border">
        <div class="container">
            <h2 class="text-info-h3">Add user</h2>
                <form action="create-user.php" method="post">
                <? include "user-form.php";?>
                <input type="submit" name="submit" class="btn btn-primary"  value="Save">
            </form>
        </div>
    </div>
</main> 
 <? include "../includes/footer.php" ?>



