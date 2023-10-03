<?php
function addDelivery($conn,$name,$date){
    try {
        $query = "INSERT INTO delivery(name,date) VALUES (:name,:date)";
        $addDelivery = $conn->prepare($query);
        $addDelivery->execute([
            'name' => $name,
            'date' => $date
        ]);
        return true;
    }catch (PDOException $e){
        die($e->getMessage());
        return false;
    }
}

function selectAllDelivery($conn){
    try {
        $query = "SELECT * FROM delivery";
        $selectAll = $conn->prepare($query);
        $selectAll->execute();
        $delivery = $selectAll->fetchAll();
        return $delivery;
    }catch (PDOException $e){
        die($e->getMessage());
    }

}