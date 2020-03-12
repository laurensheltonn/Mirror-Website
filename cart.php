<?php
    require 'config.php';

    $grand_total = 0;
    $allItems = '';
    $items = array ();

    $sql = "SELECT CONCAT (product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
    $stmt = $conn->prpeare($sql);
    $result = $stmt->get_result();
    while ($row = $result->fetchassoc()){
        $grand_total +=$row['total_price'];
        $items[] = $row['ItemQty'];
     }
     $alllItems = implode(",", $items);
?>

<?php include 'includes/header.php';?>
























<?php include 'includes/footer.php';?>