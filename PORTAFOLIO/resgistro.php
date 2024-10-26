<?php include './includes/header.php';?>

    
    <main class="container">
        <div class="contenido">
            <h1>inscribete como cliente</h1>
            <form class="formulario-registro" method="POST">
                <div class="campoIzq nombre">
                    <input class="registro__field nombre-field" type="name" placeholder="Nombre" id="name" name="nombre">
                </div>
                <div class="campoDer apellido">
                    <input class="registro__field apellido-field" type="name" placeholder="Apellido" id="lastname" name="apellido">
                </div>
                <div class="campoDer apellido">
                    <input class="registro__field Telefono-field" type="name" placeholder="Telefono" id="lastname" name="telefono">
                </div>
                <div class="campoIzq email1">
                    <input class="registro__field email-field" type="email" placeholder="Correo Electronico" id="email" name="email">
                </div>
                
                <div class="campoIzq contraseña1">
                    <input class="registro__field contraseña-field" type="password" placeholder="Contraseña" id="password" name="contraseña">
                </div>
                
                <div class="campoIzq boton1">
                    <input type="submit" value="Enviar" id="login" >
                </div>
                
            </form>
        </div>
        
</main>
<?php
require __DIR__. ('/conexion_bd.php');
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['contraseña'];

    $sql= "INSERT INTO formulario (nombre, apellido, telefono, contraseña, email) VALUES ('$nombre', '$apellido', '$telefono', '$contraseña','$email')";
    $consul = mysqli_query($conexion, $sql);
    if ($consul){
        echo "<script>alert('Registro exitoso');</script>";
    } 
    mysqli_close($conexion);

}
   
    


?>


<?php include './includes/footer.php';?>
<script></script>