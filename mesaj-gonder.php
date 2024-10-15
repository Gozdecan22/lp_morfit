<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // reCAPTCHA doğrulama
    $captcha = $_POST['g-recaptcha-response'];

    if (!$captcha) {
        echo '<script>alert("Lütfen Robot Olmadığınızı Doğrulayınız");</script>';
        $geldigi_sayfa = $_SERVER['HTTP_REFERER'];
        echo "<script>document.location.href=\"$geldigi_sayfa\"</script>";
        exit;
    } else {
        $secretKey = '6LfGXUsqAAAAANNuKbaPvK4BImSBGPMzT_TbxBSH'; // ReCAPTCHA gizli anahtarınızı buraya ekleyin

        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

        $responseData = json_decode($response, true);

        if ($responseData['success']) {
            require("class.phpmailer.php");

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug = 1;
            $mail->SMTPAuth = true;
            $mail->Host = "cph3.trdns.com";
            $mail->Port = 587;
            $mail->IsHTML(true);
            $mail->SetLanguage("tr", "phpmailer/language");
            $mail->CharSet = "utf-8";
            $mail->Username = "info@morfitsystems.com";
            $mail->Password = "Morfit.2024**";
            $mail->SetFrom("info@morfitsystems.com", $_POST["email"]);
            $mail->AddAddress("info@morfitsystems.com");
            $mail->Subject = $_POST["name"];

            // Form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $mesajturu = $_POST['mesajturu'];
            $mesaj = $_POST['mesaj'];
            $check_1 = isset($_POST['check_1']) ? ($_POST['check_1'] == 'kisisel_veriler' ? 'Kişisel veriler onaylandı' : 'Kişisel veriler onaylanmadı.') : 'Kişisel veriler onaylanmadı.';
            $check_2 = isset($_POST['check_2']) ? ($_POST['check_2'] == 'aydinlatma_metni' ? 'Aydınlatma metni onaylandı' : 'Aydınlatma metni onaylanmadı.') : 'Aydınlatma metni onaylanmadı.';


            // Telefon numarasını temizleme ve belirli bir biçime dönüştürme
            $phone = preg_replace("/[^0-9]/", "", $phone);
            $phone = preg_replace("/(\d{4})(\d{3})(\d{2})(\d{2})/", "($1) $2-$3-$4", $phone);




            // HTML email content
            $mail->Body = "<table width='500' border='0'>
        <tr style='width:500px;border-bottom:1px solid #000;border-top:1px solid #000; height:35px'>
            <h3 style='color:black'>İletişim Formu</h3>
        </tr>

        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
            <td><b>İsim:</b></td> <td>'$name'</td>
        </tr>

        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
            <td><b>Email:</b></td> <td>'$email'</td>
        </tr>

        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
            <td><b>Telefon:</b></td> <td>" . $phone . "</td>
        </tr>

        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
            <td><b>Mesaj Türü:</b></td> <td>'$mesajturu'</td>
        </tr>
        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
            <td><b>Mesaj:</b></td> <td>" . $mesaj . "</td>
        </tr>
          <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
           <td><b>Kişisel veriler:</b></td> <td>" . $check_1 . "</td>
        </tr>

       <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
         <td><b>Aydınlatma metni:</b></td> <td>" . $check_2 . "</td>
    </tr>
    </table>";

    if (!$mail->Send()) {
        echo "Email Gönderim Hatasi: " . $mail->ErrorInfo;
    } else {
        echo "E-posta başarıyla gönderildi.";
    }
} else {
    echo "ReCAPTCHA doğrulama başarısız oldu.";
}
}
}