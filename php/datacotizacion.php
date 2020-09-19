<?php
$metadata = '
    <title>Slogive Computing - Factura</title>
    <meta name="description" content="Perfil profesional, proyectos, habilidades.">
    <meta name="keywords" content="perfil, profesional, proyectos, habilidades">
    <meta name="author" content="Cesar Fonseca | Slogive">
    <link href="css/stylecotizacion.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta property="og:image" content="http://slogive.com/img/thumbnail.jpg">
    <meta property="og:title" content="Slogive Computing">
    <meta property="og:description" content="Creamos tu sitio web.">
    <meta property="og:site_name" content="Slogive Computing">
    <meta property="og:url" content="http://slogive.com/">
    <meta property="og:fb:admins" content="slogive">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slogive Computing">
    <meta name="twitter:description" content="Creamos tu sitio web.">
    <meta name="twitter:image" content="http://slogive.com/img/thumbnail-twitter.jpg">
    <meta name="twitter:site" content="@slogive0">
    <meta name="twitter:creator" content="@slogive0">

    <!-- generics -->
    <link rel="icon" href="img/favicons/favicon-32.png" sizes="32x32">
    <link rel="icon" href="img/favicons/favicon-57.png" sizes="57x57">
    <link rel="icon" href="img/favicons/favicon-76.png" sizes="76x76">
    <link rel="icon" href="img/favicons/favicon-96.png" sizes="96x96">
    <link rel="icon" href="img/favicons/favicon-128.png" sizes="128x128">
    <link rel="icon" href="img/favicons/favicon-192.png" sizes="192x192">
    <link rel="icon" href="img/favicons/favicon-228.png" sizes="228x228">
    <link id="favicon" href="img/favicons/favicon-228.png" rel="shortcut icon" type="image/x-icon">

    <!-- Android -->
    <link rel="shortcut icon" sizes="196x196" href=“img/favicons/favicon-196.png">

    <!-- iOS -->
    <link rel="apple-touch-icon" href="img/favicons/favicon-120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="path/to/favicon-152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="path/to/favicon-180.png" sizes="180x180">

    <!-- Windows 8 IE 10-->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="img/favicons/favicon-144.png">

    <!— Windows 8.1 + IE11 and above —>
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
';

$mensajeenviado = '
    <div class="ContactContainer" id="ContactContainer"><!-- Ventana Emergente - Contact Me - Formuario Enviado -->
        <div class="Contact-Message">
            <span class="ContactClose">Tu mensaje fue enviado <?php if(isset($_POST["username"])) echo $_POST["username"]; ?></span>
        </div>
        <script src="js/ContactMeWindow.js"></script>
    </div>
';

$catcha = '
<div style="justify-self: center;" class="g-recaptcha" data-sitekey="6Lcm0KUZAAAAAKHXKq9D08YLbxwCsWJUqWtt5dZV"></div>
';

$socialfacebook = 'window.open("https://facebook.com/slogive/","_blank")';
$socialinstagram = 'window.open("https://www.instagram.com/slogive0/","_blank")';
$socialtwitter = 'window.open("https://twitter.com/SlogiveC/","_blank")';
$socialwhatsapp = 'window.open("https://wa.me/573137877750","_blank")';

// Nav Items
$NavNosotrosUrl = "nosotros";
$NavNosotrosClass = "Icon-Nosotros";
$NavNosotrosText = "Nosotros";

$NavProyectosUrl = "proyectos";
$NavProyectosClass = "Icon-Proyectos";
$NavProyectosText = "Proyectos";

$NavContactenosUrl = "contactenos";
$NavContactenosClass = "Icon-Contactenos";
$NavContactenosText = "Contactenos";

?>