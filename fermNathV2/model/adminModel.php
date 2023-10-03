<?php
// fonction de vérification des informations de connexion dans la base de données
function connectAdmin($email,$password,$conn){
    $query = $conn->prepare("SELECT * FROM admin WHERE email = :email AND password = :password");
    $query->execute([
       'email' => $email,
        'password' => $password
    ]);
    $adminValid = $query->fetch();
    // Vérification pour savoir si l'utilisateur est bien présent dans la base de données avec les infos fournies
    if($adminValid){
        // L'admin est bien connecté
        $responseConnection = true;
    }else{
        // L'admin n'est pas connecté
        $responseConnection = false;
    }

    // Return du statut de connexion
    return $responseConnection;
}