<!DOCTYPE html>
<html lang="en">
 <?include "../includes/connectdb.php";?>
    <head>    
        <script>
            function myFunction(){
            document.getElementById("myDropdown").classList.toggle("show");
            }
            
            window.onclick = function(e){
                
                if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
                }
            } 
        </script>          
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CRUD - Add Data</title>
    </head>
<body>
<!-- ------------------------------- Header -------------------------------- -->
<header>
    <div class="navbar">
           <strong><a href="users.php">CRUD Users</a></strong>
           <strong><a href="pages.php">CRUD Pages</a></strong>

        <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()">Options
              <i class="fa fa-caret-down"></i>
            </button>

            <div class="dropdown-content" id="myDropdown">
                <a href="create-user-form.php">Add Users</a>
                <a href="create-pages-form.php">Add Pages</a>
                <a href="logout.php">Log Out</a>
            </div>
        </div> 
    </div>
</header>
 <!-- ------------------------------- Header  -------------------------------- -->