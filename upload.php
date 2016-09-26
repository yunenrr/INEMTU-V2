<?PHP
$ruta = "uploads/pictures/" .basename($_FILES['fotoUp']['name']);
move_uploaded_file($_FILES['fotoUp']['tmp_name'], $ruta);
?>