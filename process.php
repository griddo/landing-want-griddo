<?php

// Cargar .env manualmente
$envLines = file(__DIR__ . '/.env');
foreach ($envLines as $line) {
    $line = trim($line);
    // Reemplazo de str_starts_with() para PHP < 8.0
    if ($line === '' || substr($line, 0, 1) === '#') {
        continue;
    }
    // Separar la línea por '=' solo en el primer signo
    $parts = explode('=', $line, 2);
    if (count($parts) === 2) {
        $key = trim($parts[0]);
        $value = trim($parts[1]);

        putenv("$key=$value");
        $_ENV[$key] = $value;
    }
}

function debug($texto){
    file_put_contents('debug.log', $texto ." \n", FILE_APPEND);
}

$url_sitio = getenv('URL_SITIO');
$logo = getenv('URL_LOGO_CORREO');

//$mas_informacion = 'Si';//reparar luego de que aquiles me ayude con el frontend
$admin_email =  getenv('ADMIN_EMAIL');
$mail_template = file_get_contents('./assets/emailTemplate.html');

require __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = getenv('SMTP_HOST');
    $mail->SMTPAuth = true;
    $mail->Username = getenv('SMTP_USER');
    $mail->Password = getenv('SMTP_PASS');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port = getenv('SMTP_PORT');
    debug("PHPMailer cargado correctamente. Versión: " . $mail::VERSION);
} catch (\Exception $e) {
    debug("Error: ".$e->getMessage());
}

function limpiarInput($valor) {
    $valor = trim($valor); // quitar espacios
    $valor = preg_replace('/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/u', '', $valor); // permitir solo letras y espacios
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8'); // sanitizar y evitar XSS
}

if (trim($_SERVER['REQUEST_METHOD']) === 'POST') {//valida solo peticiones por post

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (
        
        empty($_POST['csrf_token']) ||
        empty($_SESSION['csrf_token']) ||
        !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
    ) {
        die('Token CSRF inválido o ausente');
    }

    $nameLastname = limpiarInput($_POST['name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) ?? '';
    $university = limpiarInput($_POST['university']);
    $cargo = limpiarInput($_POST['cargo']);
    $phone = htmlspecialchars(trim($_POST['phone']),ENT_QUOTES, 'UTF-8') ?? '';
    $checkMoreInfo = $_POST['wantMoreInfo'] ?? '0';
    if($checkMoreInfo == true || $checkMoreInfo == 'true' || $checkMoreInfo == 1 || $checkMoreInfo == '1'){
        $mas_informacion = 'Si';
    }else{
        $mas_informacion = 'No';
    }
    if(strlen($nameLastname) > 100 || strlen($nameLastname) < 1){
        echo "'El nombre y apellido debe tener al menos 3 caracteres y un maximo de 100'";
        die;
    }
    if((strlen($email) > 100 || strlen($email) < 1) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "'El email debe tener al menos 3 caracteres y un maximo de 100'";
        die;
    }
    if(strlen($university) > 100 || strlen($university) < 1){
        echo "'La universidad debe tener al menos 3 caracteres y un maximo de 100'";
        die;
    }
    if(strlen($cargo) > 100 || strlen($cargo) < 1){
        echo "'El cargo debe tener al menos 3 caracteres y un maximo de 100'";
        die;
    }
    if(strlen($phone) > 100 || strlen($phone) < 1){
        echo "'El telefono debe tener al menos 3 caracteres y un maximo de 100'";
        die;
    }
    

    try {

    
    // Configuración del correo
    $mail->setFrom('test_desarrollos@desarrollos.want.cl', 'test_desarrollos'); // Remitente

    $mail->addAddress($email,$nameLastname); // Destinatario principal
    
    // Contenido del correo
    $mail->isHTML(true); // Formato HTML
    $mail->Subject = 'Asunto del correo';
    $mail_template = str_replace('%nombre_ap%', $nameLastname, $mail_template);
    $mail_template = str_replace('%email%', $email, $mail_template);
    $mail_template = str_replace('%nombre_institucion%', $university, $mail_template);
    $mail_template = str_replace('%cargo%', $cargo, $mail_template);
    $mail_template = str_replace('%telefono_movil%', $phone, $mail_template);
    $mail_template = str_replace('%mas_informacion%', $mas_informacion, $mail_template);
    $mail_template = str_replace('%url_sitio%', $url_sitio, $mail_template);
    $mail_template = str_replace('%url_sitio_clean%', str_replace('https://','',str_replace('http://','',$url_sitio)), $mail_template);
    $mail->Body    = $mail_template;/*"<p>Nombre: $nameLastname | correo: $email | university: $university | cargo: $cargo | phone: $phone</p>";*/
    /*$mail->AltBody = 'Contenido en texto plano para clientes que no soportan HTML';*/
    $mail->send();
    $mail->clearAddresses();
    $mail->addAddress($admin_email);//segundo correo enviado al administrador
    $mail->send();


    echo 'El mensaje ha sido enviado';
    } catch (Exception $e) {
        echo "El mensaje no pudo ser enviado. Error: {$mail->ErrorInfo}";
    }

    


}


?>