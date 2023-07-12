<?php
include_once "connect.php";

try {
    $nombre_usuario = $_POST['formName'];
    $password_usuario = $_POST['formPswd'];
    $password_usuario_confirm = $_POST['formConfPswd'];
    $correo_usuario = filter_var($_POST['formEmail'], FILTER_SANITIZE_EMAIL);
    $telefono_usuario = filter_var($_POST['formPhone'], FILTER_SANITIZE_NUMBER_INT);

    $password_usuario_hashed = password_hash($password_usuario, PASSWORD_DEFAULT);

    // Validación de nombre
    if(strlen($nombre_usuario) > 40) 
    {
        echo "El nombre debe tener maximo 40 caracteres";
        exit;
    }
    // Validación de formato de correo electrónico
    if(!filter_var($correo_usuario, FILTER_VALIDATE_EMAIL)) 
    {
        echo "Ingrese un correo electrónico válido";
        exit;
    }
    // Validación de número de teléfono
    if(!preg_match('/^\d{9}$/', $telefono_usuario)) 
    {
        echo "Ingrese un número de teléfono válido de 9 dígitos";
        exit;
    }
    // Validación de contraseña
    if(strlen($password_usuario) < 8 || strlen($password_usuario) > 30 ||
    !preg_match("/[!@#$%^&*()-_=+]/", $password_usuario) ||
    !preg_match("/[a-z]/", $password_usuario) ||
    !preg_match("/[A-Z]/", $password_usuario) ||
    !preg_match("/[0-9]/", $password_usuario)) 
    {
        echo "La contraseña debe cumplir los siguientes requisitos:";
        echo "- Tener entre 8 y 30 caracteres";
        echo "- Contener al menos un carácter especial";
        echo "- Contener al menos una letra minúscula";
        echo "- Contener al menos una letra mayúscula";
        echo "- Contener al menos un número";
        exit;
    }
    // Verificar que la contraseña y la confirmación coincidan
    if($password_usuario !== $password_usuario_confirm) 
    {
        echo "La contraseña y la confirmación no coinciden";
        exit;
    }

    // Inserción en la base de datos si todas las validaciones son exitosas
    $sql = "INSERT INTO usuario (Nombre_Usu, Contraseña_Usu, Correo_Usu, Telefono_Usu) VALUES (:nombre, :password, :correo, :telefono)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre_usuario);
    $stmt->bindParam(':password', $password_usuario_hashed);
    $stmt->bindParam(':correo', $correo_usuario);
    $stmt->bindParam(':telefono', $telefono_usuario, PDO::PARAM_INT);

    $stmt->execute();

    echo "Inserción exitosa";
} 
catch(PDOException $e) 
{
    echo "Error en la consulta: " . $e->getMessage();
    echo "Código de error: " . $e->getCode();
}
$conn = null;
?>