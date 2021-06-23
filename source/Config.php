<?php

/**
 * DEVELOPER
 */
define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Tropical Pet",
    "desc" => "Na Tropical Pet você encontra os melhores produtos de petshop para o seu bichinho. Temos rações, acessórios, medicamentos, tapetes higiênicos e muito mais!",
    "domain" => "tropicalpets.com.br",
    "locale" => "pt_BR",
    "lang" => "pt-BR",
    "keywords" => "Tropical Pet, Clínica Veterinária, Petshop"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . '/Minifier.php';
}

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "112861974016840",
    "twitter_creator" => "@GoognetSolucao",
    "twitter_site" => "@GoognetSolucao"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "mail.goognet.com.br",
    "port" => "587",
    "user" => "sender@goognet.com.br",
    "passwd" => "Contato123*",
    "from_name" => "Tropical Pet",
    "from_email" => "thiago.marsola@goognet.com.br"
]);

/**
 * REGION
 */
define("REGION", [
    "region" => "BR-SP",
    "placename" => "Diadema",
    "position" => "-23.667889;-46.611071",
    "icbm" => "-23.667889, -46.611071"
]);

/**
 * CONTACT
 */
define("CONTACT", [
    "whatsapp" => [
        "number" => "(11) 96036-5965",
        "message" => "Olá Tropical Pet, gostaria de maiores informações",
        "messageClinic" => "Olá Tropical Pet, gostaria de agendar uma consulta para o meu pet"
    ],
    "phone" => [
        "01" => "(11) 4091-4045",
        "02" => "(11) 2668-2935"
    ],
    "mail" => "contato.tropicalpet@gmail.com",
    "address" => "Av. Água Funda, 121 - Taboão - São Bernardo do Campo",
    "addressLink" => "https://g.page/tropicalpet_?share",
    "instagram" => "https://www.instagram.com/tropicalpet_/",
    "facebook" => "https://www.facebook.com/tropicalpett/"
]);