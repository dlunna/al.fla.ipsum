<?

//$contactara = $_POST['contactara'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
//$mensaje .= "Desea contactar a: " . $contactara . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

mail('dlunna@gmail.com', $asunto, $mensaje, null, '-fwebmail@estudioipsum.com');
mail('estudio.ipsum@gmail.com', $asunto, $mensaje, null, '-fwebmail@estudioipsum.com');

?>
