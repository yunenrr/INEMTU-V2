<?PHP
$hostname_localhost ="163.178.107.130";
$database_localhost ="inemtu";
$username_localhost ="adm";
$password_localhost ="saucr.092";
$localhost = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost)
or
trigger_error(mysqli_connect_errno() ,E_USER_ERROR); 
$imagen = filter_input(INPUT_POST, 'imagen');
$query_search = "insert into imagenes(ruta) values ('".$imagen."')";
$query_exec = mysqli_query($localhost,$query_search) or die(mysqli_connect_errno());

mysqli_close($localhost);