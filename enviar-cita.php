<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'constantes.php';

$file_path = 'credenciales.json';

var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $message = $_POST["message"] ?? "";
    $emailProvider = $_POST["emailProvider"] ?? "";

    if (!empty($name) && !empty($email) && !empty($message) && !empty($emailProvider)) {
        $subject = "Nuevo mensaje de contacto";
        $messageBody = "Nombre: $name\n";
        $messageBody .= "Correo: $email\n";
        $messageBody .= "Proveedor de correo: $emailProvider\n";
        $messageBody .= "Mensaje:\n$message\n";

        // Utiliza las funciones definidas en constantes.php para obtener la configuración del servidor SMTP
        if ($emailProvider == "gmail")
            $obj = smtpGmail($file_path);
        else if ($emailProvider == "outlook")
            $obj = smtpOutlook($file_path);

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = $obj->Host;
        $mail->Port = $obj->Port;
        $mail->SMTPSecure = $obj->SMTPSecure;
        $mail->SMTPAuth = true;
        $mail->Username = $obj->Username;
        $mail->Password = $obj->Password;

        $mail->setFrom($obj->Username, 'Remitente');
        $mail->addAddress($email);

        $mail->Subject = $subject;
        $mail->Body = $messageBody;

        if ($mail->send()) {
            header("Location: send.php");
            exit();
        } else {
            //header("Location: error.php");
            exit();
        }
    } else {
       // echo "Por favor, complete todos los campos del formulario.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
