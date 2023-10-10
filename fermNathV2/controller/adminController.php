<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/fermNathV2/" && $_SESSION['isConnected']){
    require_once 'templates/homePage.php';
}elseif($uri == "/fermNathV2/" && empty($_SESSION['isConnected'])){
    header('Location: index.php?/login');
}elseif($uri == "/fermNathV2/index.php?/login" && empty($_SESSION['isConnected'])){
    require_once 'templates/login/loginTemplate.php';
    if(!empty($_POST['email'])){
        // Verification du format de l'adresse email
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $email = htmlspecialchars($_POST['email']);
            if(!empty($_POST['password'])){
                $password = htmlspecialchars($_POST['password']);
                //Verification desn informations de connexion dans la base de données
                $isConnect = connectAdmin($email,$password,$conn);
                $_SESSION['isConnected'] = $isConnect;
                //Si l'utilisateur est connecté : redirection vers la page des commandes
                if($_SESSION['isConnected']){
                    header('Location:index.php?/orders');
                }
            }
        }
    }
}elseif($uri == "/fermNathV2/index.php?/login" && $_SESSION['isConnected']){
    echo 'Dorian';
    header('Location:index.php?/orders');
}



