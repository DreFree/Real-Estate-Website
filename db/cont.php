<?php
    $dbserver='localhost';
    $dbname='RealES';
    $dbuser='root';
    $dbpass='';

    $link=@mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

    if(mysqli_connect_errno())
        die ("Error 110 - Conection Fail.");


?>
