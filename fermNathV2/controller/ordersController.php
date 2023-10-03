<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/fermNathV2/index.php?/orders" && $_SESSION['isConnected']){
    require_once 'templates/orders/ordersTemplate.php';
}