<?php
?>

<?php
try{// essaie de faire ca


    $user = "lessandra";
    $password = "100113";
 $conn = new PDO('mysql:host=localhost;dbname=cuisine;charset=utf8', $user, $password); // connexion a la base
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // attribut a mettre pour recevoir un message d'erreur precis
 
 }catch(PDOException $e){ // sinon tu m'affiche pourquoi tu veux pas, nique
    echo " erreur connexion  : " . $e->getMessage();
 }
 
 try{
    $query = $conn->prepare('INSERT INTO reservation (nom, prenom, email, telephone, messages, jour, heure) VALUES (:nom, :prenom, :email, :telephone,:messages, :jour, :heure)');
 
    $query->bindParam(':nom', $_POST["nom"]);
    $query->bindParam(':prenom', $_POST["prenom"]);
    $query->bindParam(':email', $_POST["email"]);
    $query->bindParam(':telephone', $_POST["telephone"]);
    $query->bindParam(':messages', $_POST["messages"]);
    $query->bindParam(':jour', $_POST["jour"]);
    $query->bindParam(':heure', $_POST["heure"]);
 
    $query->execute();
 
    echo "requete bien envoyé";
    header("location: reserve.php?message");
 
    if($_GET["message"]){
       echo ' requete bien envoyé';
    }
 }catch(PDOException $e){
    echo "Erreur dans la requete " . $e->getMessage();
 }
 
 
 ?>