<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dane z formularza
    $name = $_POST["imie"];
    $email = $_POST["email"];
    $source = $_POST["select"];
    $message = $_POST["wiadomosc"];

    // Adres e-mail docelowy
    $to = "agnieszka.bienas@interia.pl";

    // Temat wiadomości
    $subject = "Nowa wiadomość od: $name";

    // Treść wiadomości
    $body = "Imię: $name\n";
    $body .= "Email: $email\n";
    $body .= "Źródło: $source\n";
    $body .= "Wiadomość:\n$message";

    // Nagłówki wiadomości
    $headers = "From: $email";

    // Wysyłanie wiadomości e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość została wysłana pomyślnie.";
    } else {
        echo "Wystąpił błąd podczas wysyłania wiadomości.";
    }
}
?>
