<?php
require_once '../../conDB.php'; // On inclut la connexion à la base de données

$parse = file_get_contents('php://input');
$parse = json_decode($parse, true);

if(!empty($parse['email']) && !empty($parse['password'])) // Si il existe les champs email, password et qu'il sont pas vident
{
    // Converteur
    $email = htmlspecialchars($parse['email']); 
    $password = htmlspecialchars($parse['password']);
        
    $req = $pdo->prepare('SELECT * FROM user WHERE email = ?');
    $req->execute(['email' => $email]);
    $user = $req->fetch();

    if(password_verify($password, $user->password)){
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
        header('Location : product.pug');
        exit();
    } else {
        $_SESSION['flash']['danger'] = 'E-mail ou mot de passe incorrecte'; 
    }  
}