<?php
$nombre=$_POST['nickname'];
$contra=$_POST['password'];
$edad=$_POST['age'];
$telf=$_POST['phone'];
$local=$_POST['location'];
$correo=$_POST['email'];

$conexion=mysqli_connect('localhost','root','','conexion');

if(!$conexion){
    die("Error al conectar con la base de datos:".mysqli_connect_error());
}

$sql="INSERT INTO datos(Nombre,Contrasena,Edad,Telefono,Localidad,Email)VALUES
('$nombre','$contra','$edad','$telf','$local','$correo')";

if(mysqli_query($conexion,$sql)){
    echo "Datos guardados correctamente";

}else{
    echo "Error al guardar los datos:".mysqli_error($conexion);
}

mysqli_close($conexion)



?>