<?php
include __DIR__ . '/env.php';

$location = "Sydney";
$site = "Service Heroes Plumbing" . $location;
$phone_number = "0485 800 214";
$admin_email = 'arijal@aiims.com.au';
$no_reply_email = 'info@servicesheroes.sydney';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;
$gtm_id = 'GTM-TPDTHMZ';

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
