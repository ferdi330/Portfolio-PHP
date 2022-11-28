<?
 include "includes/config.php";
 include "includes/header.php";
?>

    <!-- ------------------------------- Header -------------------------------- -->
    <header>
      <div class="header_title_border">
        <h1 class="header_title_name">Login screen</h1>
        <img src="img/user-picture.png" class="main_inlog_image" alt="" />
      </div>
      <div class="header_title_tekst">
        <h3>Please enter your credentials</h3>
      </div>
    </header>
     <!-- ------------------------------- Header  -------------------------------- -->

     <!-- ------------------------------- Main -------------------------------- -->
    <main>
      <div class="main_inlog_border">
        <div class="main_inlog_form">
          <form action="includes/user-login.php" method="post">
            <div class="main_inlog_formgroup">
              <label for="gebruikersnaam">Gebruikersnaam:</label>
              <input
                name="gebruikersnaam"
                id="gebruikersnaam"
                type="text"
                required
                pattern="\S(.*\S)?"
                title="This field is required"
                placeholder="Your gebruikersnaam.."
              />
            </div>
            <div class="main_inlog_formgroup">
              <label for="wachtwoord">Password:</label>
              <input
                name="wachtwoord"
                id="wachtwoord"
                type="text"
                required
                pattern="\S(.*\S)?"
                title="This field is required"
                placeholder="Your wachtwoord.."
              />
            </div>
            <input type="checkbox" value="lsRememberMe" id="rememberMe" />
            <label for="rememberMe" class="rmbr_form">Remember me</label>
            <input type="submit" value="Log in" />
          </form>
        </div>
      </div>
      <div class="main_inlog_box">
        <p class="main_link_forgotten">Forgotten password?</p>
      </div>
    </main>
<!-- ------------------------------- Main -------------------------------- -->
<? include "includes/footer.php" ?>
