<?php

require_once 'config.php';


if (isset($_POST['del'])) {
    $id = $_POST['del'];
    $del = $con->query("DELETE FROM `boost_bill` WHERE `id`='$id'");
    if ($del) {
        echo 'Deleted Successfully!';
    }
}
