<? include "../includes/header_cms.php";?>
<main>
   <div class="main_inlog">
		<div class="container">
			<h2 class="text-info-h3">Create page</h2>
				<form action="create-pages.php" method="post">
				<? include "pages-form.php";?>
				<input type="submit" name="submit" class="btn btn-primary"  value="Save">
			</form>
		</div>
	</div>
</main> 
 <? include "../includes/footer.php" ?>

