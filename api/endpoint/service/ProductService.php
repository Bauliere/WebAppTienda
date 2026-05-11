<?php
require "../entity/Product.php";
header('Content-Type: application/json');

function getAllProducts(PDO $conn, int $order = 1, bool $Desc = true){
    $sortDir = ($Desc) ? 'DESC' : 'ASC';
    $orderCol = getOrder($order);
    $query = $conn->prepare("SELECT P.Name AS name, P.Price AS price, 
            P.Description AS description, P.Photo as photo, P.creationDate, 
            C.Name AS category
            FROM 
            Products P 
            JOIN 
            Categories C 
            ON 
            C.ID = P.Category ORDER BY $orderCol $sortDir");
    try{
        $query->execute();
        $rows = $query->fetchAll();
        $products = getResult($rows);
        getResponse($products);
    }
    catch(PDOException $e){
        http_response_code(400);
        echo json_encode(["Status"=>"error", "Message"=>$e->getMessage()]);
    }
}

function getProductByName(PDO $conn, string $name, int $order = 1, bool $Desc = true){
    $sortDir = ($Desc) ? 'DESC' : 'ASC';
    $orderCol = getOrder($order);
    $query = $conn -> prepare("SELECT P.Name AS name, P.Price AS price, 
            P.Description AS description, P.Photo as photo, P.creationDate, 
            C.Name AS category
            FROM 
            Products P 
            JOIN 
            Categories C 
            ON 
            C.ID = P.Category WHERE name LIKE ? 
            ORDER BY $orderCol $sortDir");
    $name = cleanString($name);
    $query->bindParam(1, $name);
    try{
        $query->execute();
        $rows = $query->fetchAll();
        $products = getResult($rows);
        getResponse($products);
    }
    catch(PDOException $e){
        http_response_code(400);
        echo json_encode(["Status"=>"error", "Message"=>$e->getMessage()]);
    }
}

function getResult($rows): array{
    $products = [];
    $error = [];
    if (count($rows) > 0) {
        foreach ($rows as $row) {
            try {
                $p = new Product($row);
                array_push($products, $p);
            } catch (Exception $e) {
                array_push($error, $e->getMessage());
                return $error;
            }
        }
    }
    return $products;
}

function getResponse(array $products){
    if (empty($products)) {
        http_response_code(404);
        echo json_encode(["status" => "error", "message" => "No matching records found"]);
    } else {
        http_response_code(200);
        echo json_encode($products);
    }
}

function getOrder(int $order): string{
    switch($order){
        case 1:
            return 'name';
        case 2: 
            return 'price';
        case 3:
            return 'category';
        case 4:
            return 'creationDate';
        default:
            return 'name';
    }
}

function cleanString(string $text): string{
    if(strlen($text) > 50 || strlen($text) === 0){
        return "%%";
    }
    $text = trim($text);
    $text = str_replace(['%', '_'], ['\%', '\_'], $text);
    $text = preg_replace('/[^\p{L}\p{N}\s\-\_\.\']/u', '', $text);
    return "%{$text}%";
}