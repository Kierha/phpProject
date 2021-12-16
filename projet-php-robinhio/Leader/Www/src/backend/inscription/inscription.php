<?php
require_once '../../conDB.php'; // inclu la connexion à la bdd

$parse = file_get_contents('php://input');
$parse = json_decode($parse, true);
//print_r($parse, $parse['pseudo']);

     if(!empty($parse['pseudo']) && !empty($parse['lastname']) && !empty($parse['firstname']) && !empty($parse['age']) && !empty($parse['country']) && !empty($parse['city']) && !empty($parse['address']) && !empty($parse['address2']) && !empty($parse['phone']) && !empty($parse['mail']) && !empty($parse['password'])) {

          $pseudo = htmlspecialchars($parse['pseudo']);
          $lastname = htmlspecialchars($parse['lastname']);
          $firstname = htmlspecialchars($parse['firstname']);
          $age = htmlspecialchars($parse['age']);
          $country = htmlspecialchars($parse['country']);
          $city = htmlspecialchars($parse['city']);
          $address = htmlspecialchars($parse['address']);
          $address2 = htmlspecialchars($parse['address2']);
          $phone = htmlspecialchars($parse['phone']);
          $email = htmlspecialchars($parse['mail']);
          $password = sha1($parse['password']); //Protection mdp

          // Insertion BDD
          $insertUser = $pdo->prepare('INSERT INTO user(pseudo, user_LastName, user_FirstName, age, country, city, address, address2, user_Phone_number, user_Email, user_Password) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
          $insertUser->execute(array($pseudo, $lastname, $firstname, $age, $country, $city, $address, $address2, $phone, $email, $password,
          ));

         echo "Done";
     }else{ 
         echo "Veuillez completer les champs ...";
     }
