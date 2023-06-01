<?php
    $conexion = oci_connect("system" , "semestre3" , "localhost/xe");
    if(!$conexion){
        $m=oci_error();
        echo $m['message'],"n";
        exit;
    }else{
        echo "Conexion Con Exito a oracle";}
?>