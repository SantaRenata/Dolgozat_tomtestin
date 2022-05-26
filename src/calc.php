<!--
File: calc.php
Author: Sánta Renáta Diána
Copyright: 2022, Sánta Renáta Diána
Group: Szoft I N
Date: 2022-05-26
Github: https://github.com/SantaRenata/
Licenc: GNU GPL
-->

<?php
echo file_get_contents("templates/head.html");

$page = file_get_contents("templates/calc.html");

function calcBody($tomeg,$magassag){
    $testindex = $tomeg/pow($magassag,2);
    
    return $testindex;
}
if (!empty($_GET['tomeg']) and !empty($_GET['magassag'])){
    $tomeg = $_GET['tomeg'];
    $magassag = $_GET['magassag'];
    $testindex = calcBody($tomeg,$magassag);
}else {
    $testindex = "Hiba! Helytelen adatok.";
}

$page = str_replace("{{test}}",$testindex,$page);

echo $page;

echo file_get_contents("templates/foot.html");
?>