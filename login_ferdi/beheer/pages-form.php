<? include "../includes/config.php";
$sql = "SELECT * FROM modules";
$sth = $db->prepare($sql);
$sth->execute();
?>

<div class="main_inlog_formgroup">
	<label for="page_name"> Header: </label>
	<input 
	  value="<?= $row["page_name"];?>"
	  class="form-control" type="text" name="page_name" id="page_name" placeholder="Enter header..">
</div>

<div class="main_inlog_formgroup">
	<label for="module">Module:</label>
	  <select name="module_id" id="module">
		  <? 
			  while($option = $sth->fetch()) {
				  ?>
				  	<option <? if($option["module_id"] == $row["module_id"]){ ?>selected <? } ?>value="<?= $option["module_id"];?>"><?= $option["module_name"];?></option>
				  <?
			  }
		  ?>
	  </select>
</div>

<div class="main_inlog_formgroup">
	<label for="header"> Title: </label>
	<input 
	  value="<?= $row["page_header"];?>"
	  class="form-control" type="text" name="header" id="header" placeholder="Enter title..">
</div>


<div class="main_inlog_formgroup">
    <label for="content">Content:</label><br>
	    <textarea id="content"  name="content" rows="4" cols="50"><?= $row["page_content"];?></textarea>
</div>


 
 
 <!-- ------------------------------- 
	 we hebben MODULE ID en MODULE NAME gelinkt met JOIN query ---
	 Volgende stap is dat je form textarea probeert te fixen en de css.
	 maak opdrachten van je stage. 
	
	 
	  -------------------------------- -->
