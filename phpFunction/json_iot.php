<?php
require_once "config.php";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
    //$dbh->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    $dbh->exec("set names utf8");
    $res = $dbh->query("SELECT * FROM `action`");
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res_arr = $res->fetch();

    //print_r($res_arr);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

echo json_encode($res_arr);
$dbh = null;
?>