<?php
// * connect
include('../include/db.php');

// * check for game name filter in url
$name = null;
if (!empty($_GET['name'])) {
    $name = $_GET['name'];
}

// * fetch show data
$sql = "SELECT * FROM exampublishers ORDER BY name";

if(!empty($name)) {
    $sql = "SELECT * FROM  exampublishers WHERE name = :name";
}

$cmd = $db->prepare($sql);

if(!empty($name)) {
    $cmd->bindParam(':name', $name, PDO::PARAM_STR, 50);
}

$cmd->execute();

$games = $cmd->fetchAll(PDO::FETCH_ASSOC);

if (empty($games)) {
    echo '{ code: 404, response: "Not found"}';
}
else {
    // * output json
    echo json_encode($games);
}

// * disconnect
$db = null;
?>