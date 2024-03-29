<?php
require_once('../model/User.php');
require_once('../config/config.php');
require_once('../libs/Database.php');

$database   = new Database();
$connection = $database->getConnection();
$userModel = new User($connection);
 
    if (isset($_POST['actualizar'])) {
        $dato = $_POST['identificadorActualizar'];
        $userModel->setId($dato);    
        $actualizar = $userModel->getById();
    }
        require_once('../vistas/update.php');

    if (isset($_POST['envio_edit'])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $cedula = $_POST["cedula"];
        $id = $_POST["identificador"];
        $userModel->setId($id);
        $userModel->setNombre($nombre);
        $userModel->setApellido($apellido);
        $userModel->setEmail($email);
        $userModel->setCedula($cedula);
        $most = $userModel->actualizarUsuario();
    }


?>