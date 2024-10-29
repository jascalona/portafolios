<?php

if (isset($_POST['btn_submit'])) {
    if (!empty($_POST['name']) && !empty(['email']) && !empty($_POST['asunto']) && !empty($_POST['message'])) {
       
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $header = "From: jose.escalona@grupoxven.com" . "\r\n";
        $header .= "Reply-To: abrahamjose.1587@gmail.com" . "\r\n";
        $header .= "X-Miler: PHP/" . phpversion();
        
        @mail($email, $asunto, $message, $header);
        if ($email) {
            echo '<h4 style="background:  rgb(121, 192, 15); position: absolute; margin-top: 20px; padding: 25px;" >Solicitud Enviado correctamente</h4>';
        }
        



    }
}


?>