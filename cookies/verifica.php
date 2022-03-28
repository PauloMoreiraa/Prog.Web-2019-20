<?php

header("Location: index.php");

$categoria= $_POST['lerCategoria'];

setcookie('codcategoria', $categoria);


?>