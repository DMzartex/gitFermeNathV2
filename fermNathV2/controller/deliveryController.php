<?php
$uri = $_SERVER['REQUEST_URI'];
if($uri == "/fermNathV2/index.php?/delivery/show"){
    $deliveries = selectAllDelivery($conn);
    require_once 'templates/delivery/deliveryShowTemplate.php';
}elseif ($uri == "/fermNathV2/index.php?/delivery/Add"){
    if(!empty($_POST['titled'])){
        $titled = htmlspecialchars($_POST['titled']);
        if(!empty($_POST['date'])){
            $date = htmlspecialchars($_POST['date']);
            $statut = addDelivery($conn,$titled,$date);
            if($statut){
                $_SESSION['flashMessage'] = "Livraison ajouté avec succès !";
                $_SESSION['flashColor'] = "success";
                header('Location:index.php?/delivery/show');
            }
        }
    }
    require_once 'templates/delivery/deliveryAddTemplate.php';
}