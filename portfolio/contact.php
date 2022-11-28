
<!-- ---------------------------- Main Content ----------------------------- -->
<main>
    <div class="content">
        <div class="container-contact">
            <div class="contact-left">
                <h1>Contactformulier</h1>
            </div>
            <div class="contact-right">
                <h2>Ferdi Ermis</h2>
                <p>Front-End Web Development &</p>
                <p>User Experience Design</p>
            </div>
        </div>
    </div>

    <!-- ------------------------- Contact sectie -------------------------- -->
    <div class=container-background>
        <div class="container-contact">

            <h2 class="max">Contactpersoon</h2>
            <div class="filler-contact">

                <p class="center-contact">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                    </svg>
                    Ferdi Ermis
                </p>

                <p class="center-contact">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.707,12.293c-0.391-0.391-1.023-0.391-1.414,0l-1.594,1.594c-0.739-0.22-2.118-0.72-2.992-1.594 s-1.374-2.253-1.594-2.992l1.594-1.594c0.391-0.391,0.391-1.023,0-1.414l-4-4c-0.391-0.391-1.023-0.391-1.414,0L3.581,5.005 c-0.38,0.38-0.594,0.902-0.586,1.435c0.023,1.424,0.4,6.37,4.298,10.268s8.844,4.274,10.269,4.298c0.005,0,0.023,0,0.028,0 c0.528,0,1.027-0.208,1.405-0.586l2.712-2.712c0.391-0.391,0.391-1.023,0-1.414L17.707,12.293z M17.58,19.005 c-1.248-0.021-5.518-0.356-8.873-3.712c-3.366-3.366-3.692-7.651-3.712-8.874L7,4.414L9.586,7L8.293,8.293 C8.054,8.531,7.952,8.875,8.021,9.205c0.024,0.115,0.611,2.842,2.271,4.502s4.387,2.247,4.502,2.271 c0.333,0.071,0.674-0.032,0.912-0.271L17,14.414L19.586,17L17.58,19.005z"></path>
                    </svg>
                    +31 684129302
                </p>

                <p class="center-contact">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5 39.3-50.5 42.8 33.3h643.1l42.8-33.3 39.3 50.5-27.7 21.5zM833.6 232L512 482 190.4 232l-42.8-33.3-39.3 50.5 27.6 21.5 341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5-39.3-50.5-42.7 33.2z"></path>
                    </svg>
                    ferdi_ermis@outlook.com
                </p>
            </div>
        </div>
    </div>

    <div class="contact-content">
        <div class="container-contact">
            <h2 class="max">Contactformulier</h2>
            <div class="form-left">
                <form action="create-contact.php" method="post">
                    <div class="form-group">
                        <label for="Voornaam">Naam:</label>
                        <input name="voornaam" id="voornaam" type="text"
                         required pattern="\S(.*\S)?" title="This field is required"
                         placeholder="*"/>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input name="email" id="email" type="text"
                         required pattern="\S(.*\S)?" title="This field is required"
                         placeholder="*"/>
                    </div>
                    <div class="form-group">
                        <label for="onderwerp">Onderwerp:</label>
                        <input name="onderwerp" id="onderwerp" type="text"
                         required pattern="\S(.*\S)?" title="This field is required"
                         placeholder="*"/>
                    </div>
                    <div class="form-group">
                        <label for="bericht">Bericht:</label>
                        <input name="bericht" id="bericht" type="text" class="userInput"
                         required pattern="\S(.*\S)?" title="This field is required"
                         placeholder="*"/>
                    </div>
                    <div class="form-group">
                        <label for="submit">*:</label>
                        <input name="submit" type="submit" class="button" value="Verstuur" />
                    </div>
                </form>
        </div>
    </div>
 <img src="img/world.png" class="responsive-world" alt="" />
</main>

