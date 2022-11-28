<div class="main_inlog_formgroup">
	<label for="username"> Username: </label>
	<input  
	 value="<?= $row["user_name"];?>" class="form-control" type="text" name="username" placeholder="Enter username.." >
</div>

<div class="main_inlog_formgroup">
	<label for="password"> Password: </label>
	<input 
	 value="<?= $row["password"];?>" class="form-control" type="password" name="password" id="password" placeholder="Enter password..">
</div>

<div class="main_inlog_formgroup">
  <label for="firstname"> Name: </label>
  <input  
   value="<?= $row["user_firstname"];?>" class="form-control" type="text" name="firstname" id="firstname" placeholder="Enter firstname..">
</div>

<div class="main_inlog_formgroup">
  <label for="lastname"> Lastname: </label>
  <input 
   value="<?= $row["user_lastname"];?>" class="form-control" type="text" name="lastname" id="lastname" placeholder="Enter lastname..">
</div>

<div class="main_inlog_formgroup">
  <label for="mail"> E-mail: </label>
  <input 
   value="<?= $row["user_mail"];?>" class="form-control" type="email" name="mail" id="mail" placeholder="Enter e-mail..">
</div>

<div class="main_inlog_formgroup">
  <label for="phone"> Phone: </label>
  <input 
   value="<?= $row["user_phone"];?>" class="form-control" type="tel" name="phone" id="phone" placeholder="Enter phone..">
</div><br>

