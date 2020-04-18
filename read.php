<?php 
    $mysqli = new mysqli("localhost","root","","kawiarnia");
    $result= $mysqli->query("select * from oferta where aktywna=1 order by rand() limit 1");
    $data= $result->fetch_object();
?>
<h1><?php echo($data->nazwa); ?></h1>
<h3><?php echo($data->cena); ?></h3>