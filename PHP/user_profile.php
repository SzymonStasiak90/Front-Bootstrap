<?php
    session_start();
?>


<!DOCTYPE HTML>
<html lang ="pl">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Rezerwój Bilety</title>
        <meta name = "description" content="Wybieraj i rezerwój bilety w promocyjnych cenach na wszystkie nadchodzące wydarzenia" />
        <meta name = "keywords" content="bilety, promocja, taniej, mecze, koncerty, kino, teatr" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style_profile.css">
        <link rel="stylesheet" href="../css/fontello.css">
    </head>



    <body>

        <div id = container>

            <div id = logo>  <img src="../img/Ticket2.jpg"  style="width: auto; height: auto;"></div>
            
            <nav id="topnav">
		
                <ul class="menu">
                    <li><a href="#">Strona główna</a></li>
                    <li><a href="#">O nas</a></li>
                    <li><a href="#">Kontakt</a></li>
                    <li><a href="#">Twój Profil</a></li>
                </ul>
            </nav>
            
            
            <div id = "invitation_bar">Moje Konto
            </div>










<form action = "login_engine.php" method = "POST">

<div id = "login">

<?php
            
            echo "<p>Witaj ".$_SESSION['user']."!";
            echo "<p>Zamowiles ".$_SESSION['event'];
        
?>

</div>

</form>



            <footer>
	
                <div class="socials">
                    <div class="socialdivs">
                        <div class="fb">
                            <i class="icon-facebook"></i>
                        </div>
                        <div class="yt">
                            <i class="icon-youtube"></i>
                        </div>
                        <div class="tw">
                            <i class="icon-twitter"></i>
                        </div>

                        <div style="clear:both"></div>
                    </div>
                </div>
                
                <div class="info">
                    
                </div>
            
            </footer>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
                crossorigin="anonymous">
        </script>

        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
