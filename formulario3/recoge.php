<?php 
//print_r($_REQUEST);

function limpiarEntradaTexto($entrada) {
    $tmp=strip_tags(trim($entrada));
    if (get_magic_quotes_gpc()) { 
        $tmp = stripslashes($tmp); 
     } 
    return $tmp;
}

$nombre = (isset($_REQUEST['nombre']))?$_REQUEST['nombre']:"No Definido";
$fechanacimiento = (isset($_REQUEST['fechanacimiento']))?$_REQUEST['fechanacimiento']:"No Definido";
$email = (isset($_REQUEST['email']))?$_REQUEST['email']:"No Definido";
$sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:"No Definido";
$familianumerosa = (isset($_REQUEST['familianumerosa']))?$_REQUEST['familianumerosa']:"No";

$nombre= limpiarEntradaTexto($nombre);

print "<p>Su nombre limpio es                  $nombre</p>"; 
print "<p>Su fecha de nacimiento es     $fechanacimiento</p>"; 
print "<p>Su email es                   $email</p>";
print "<p>Su sexo es                    $sexo</p>";
print "<p>Familia Numerosa              $familianumerosa</p>";




?>

