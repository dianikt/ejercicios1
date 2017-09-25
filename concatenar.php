<?php
$a = array( 1,1,2,3,5,8,13);
$separador = "";
foreach( $a as $i ) {
    echo $separador . $i;  //concatenem el separador amb l'element
    $separador = ", ";
	}
?>
<br>
<?php
$a1 = array( 'A','B','C','D');
$separador = "";
foreach( $a1 as $i ) {
    echo $separador . $i;  //concatenem el separador amb l'element
    $separador = ", ";
	}
	
?>
<br>
<?php
$a3 = array( 'Boli', 'Goma', 'Llapis', 'Escurça');
$separador = "";
foreach( $a3 as $i ) {
    echo $separador . $i;  //concatenem el separador amb l'element
    $separador = ", ";
}

?>
