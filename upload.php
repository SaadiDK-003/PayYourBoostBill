<?php
require_once 'config.php';

// For Summary
$phNum = $_POST['mobileNumber'];
$amount = $_POST['amount'];
$processFee = 5;
$total = $amount + $processFee;

// For Data Insert
$columns = "";
$values = "";

foreach ($_POST as $key => $value) {
    $columns .= $key . ",";
    $values .= "'" . $value . "',";
}
$columns = substr($columns, 0, strlen($columns) - 1);
$values = substr($values, 0, strlen($values) - 1);

$q = $con->query("INSERT INTO `boost_bill` ($columns) VALUES($values)");

if ($q) {
    echo json_encode(["phNum" => $phNum, "amount" => $amount, "processFee" => $processFee, "total" => $total]);
}
