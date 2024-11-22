<?php

function connection(){
$serverName="localhost" ;
$userName= "root" ;
$password="" ;
$DBname="amartrip" ;

$con= new mysqli($serverName ,$userName, $password ,$DBname ) ;
return $con ;
}
?>