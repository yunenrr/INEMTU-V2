<?PHP
$hostname="163.178.107.130";
$database ="INEMTU";
$username ="sqlserver";
$password ="saucr.12";

$conn = mssql_connect($hostname,$username,$password);
mssql_select_db($database ,$conn);

$imagen=$_POST['imagen'];

mssql_query("insert into imagen(ruta) values ('pictures/".$imagen."'),$conn");

mssql_close($conn);

?>