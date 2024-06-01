<?php

if($_SERVER["REQUEST_METHOD"]  == "POST") {


    print_r($_POST);

    $Nombre = (isset($_POST['nombre']))?$_POST['nombre']:null;
    $Apellido =(isset($_POST['apellido']))?$_POST['apellido']:null;
    $Email = (isset($_POST['Email']))?$_POST['Email']:null;
    $Password= (isset($_POST['Password']))?$_POST['Password']:null;
    $Genero = (isset($_POST['Genero']))?$_POST['Genero']:null;
    $Nivel_Academico = (isset($_POST['Nivel_Academico']))?$_POST['Nivel Academico']:null;

}


?>