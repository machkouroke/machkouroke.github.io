<?php


    $bdd = new PDO('mysql:host=localhost;dbname=tractpool', 'root', '',
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $req = $bdd->prepare('INSERT INTO question (nom, email, message) VALUES(?, ?, ?)');
    $req->execute(array($_POST['nom'], $_POST['email'], $_POST['message']));
    header('Location: index.php#formulaire');


?>
					