<!-- Verif erreur code php-->

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!-- Verif erreur code php-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>La fabrique du petit mange</title>
        <link rel="stylesheet" type="text/css" href="css/accueil.css">
    </head>

        <header>
            <h1>
                    La fabrique du petit mange
            </h1>

            <nav>
                    <ul>
                        <li><a href="accueil.html">Accueil</a></li>
                        <li><a href="menujour.html">Menu du jour</a></li>
                        <li><a href="menualacarte.html">Menu a la carte</a></li>
                        <li><a href="livredor.php">Livre d'or</a></li>
                        <li><a href="reserve.php">Reservez-ici</a></li>
                        
                    </ul>
            </nav>
        

        </header>
<body>


        <div class="forme">
        <form action="reservation.php" method="post">
          <label for="fname">NOM</label>
            <input type="text" id="fname" name="nom" >

          <label for="lname">Prenom</label>
            <input type="text" id="lname" name="prenom" >

                <label for="lname">Email</label>
                <input type="text" id="lname" name="email" >

                <label for="fname">Telephone</label>
                <input type="text" id="telephone" name="telephone">

                
                <label for="fname">Messages</label>
                <input type="text" id="fname" name="messages" >
                
                <label for="fname">Date</label>

                <input type="date" name="jour">
                <label for="fname">Heure</label>

                <input type="time" name="heure">
                 <input type="submit" value="Envoi">
               
                </select>
                
            
               
              
            </form>
        </div>
        <h3>
                  Contactez-nous<br>05.75.53.87.90>
        </h3>
              <p style="text-align: center;">Le restaurant est ouvert 7jours/7 <br>
                (Sauf Réveillon de Noël)<br>
                 POUR VOS RECEPTIONS DE GROUPE A PARTIR DE 10 PERSONNES<br>
                
</body>
</html>
            <!--      
            <img src="https://mk0hotellenouveowyay.kinstacdn.com/wp-content/uploads/2019/01/restaurant-7-mers-bandeau.jpg" border="5px >

           a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsZ0XTE57vA3rcVWTH6qZVnOjApNzzrTaP-l8zDxyeRNZr8ipVsw">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsZ0XTE57vA3rcVWTH6qZVnOjApNzzrTaP-l8zDxyeRNZr8ipVsw" alt="Paris" style="width:400px">-->
                    

            