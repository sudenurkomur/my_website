<?php
if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $to = 'sude.sudennur53@gmail.com'; // Alıcı e-posta adresi
    $headers = "From: $email";

    // E-posta gövdesi
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    // E-postayı gönder
    mail($to, $subject, $body, $headers);

    // Başarı mesajı
    echo '<p>Your message has been sent!</p>';
}
?>

