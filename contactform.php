<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $telephone = $_POST['telephone'];

    $mailTo = "sjalloh105@gmail.com";
    $headers = "Form: ".$mailFrom;
    $txt = "you have received an email".$name.".\n\n".$subject;
    mail($mailTo, $telephone, $txt, $headers);
    headers("Location: index.html?mailsend");

}
?>