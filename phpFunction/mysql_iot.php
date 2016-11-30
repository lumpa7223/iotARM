<?php
require_once "config.php";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
    $dbh->exec("set names utf8");
    $res = $dbh->query("SELECT * FROM `action`");
    $res = $res->fetch();

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


switch ($_GET['move']) {
    case 'up':
        $sql = "UPDATE `action` SET `movY` = IF(`movY` < 10 ,`movY`+0.5,`movY`),`isMov` =1,`isYMov` =1 WHERE `action`.`id` = 1";
        $dbh->query($sql);
        break;
    case 'down':
        $sql = "UPDATE `action` SET `movY` = IF(`movY` > -10 ,`movY`-0.5,`movY`),`isMov` =1,`isYMov` =1 WHERE `action`.`id` = 1";
        $dbh->query($sql);
        break;
    case 'left':
        $sql = "UPDATE `action` SET `movX` = IF(`movX` > -10,`movX`-0.5,`movX`),`isMov` =1,`isXMov` =1 WHERE `action`.`id` = 1";
        $dbh->query($sql);
        break;
    case 'right':
        $sql = "UPDATE `action` SET `movX` = IF(`movX` < 10,`movX`+0.5,`movX`),`isMov` =1,`isXMov` =1 WHERE `action`.`id` = 1";
        $dbh->query($sql);
        break;
    case 'trace':
        $sql = "UPDATE `action` SET `isTrace` =1 WHERE `action`.`id` = 1";
        $dbh->query($sql);
        break;
}
$res2 = $dbh->query("SELECT * FROM `action`");

echo json_encode(array('result' => 'ok', 'sql' => $res2->fetch()));

$dbh = null;