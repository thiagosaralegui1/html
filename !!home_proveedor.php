<?php require("header.php");

session_start();
if (!isset($_SESSION['email'])) {
    header("location:!!ingreso_login_proveedor.php");
    exit();
} else {
    
    $email = $_SESSION["email"];
}
?>

<h1>Bienvenido usuario</h1> <?php echo $email ?>
<a href="logout.php">Cerrar sesión</a>

<?php require("footer.php"); ?>
