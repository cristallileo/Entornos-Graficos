pagina3.php
<?php
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if (isset($_SESSION['usuario']))
{
echo "Bienvenido ".$_SESSION['usuario'];
}
else
{
echo "No tiene permitido visitar esta página.";
}
session_destroy();
?>
</body>
</html>