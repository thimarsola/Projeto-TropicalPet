<!doctype html>
<html lang="<?= SITE["lang"]; ?>">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NM4G2R9');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <link rel="alternate" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" hreflang="x-default" />
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <?php  if (!is_404()): ?>
        <title><?php echo(is_home()) ? SITE["name"] : the_title() . " - " . SITE["name"]; ?></title> <?php else: ?> <title>
        <?= SITE["name"]; ?></title> <?php endif; ?>
    <base href="<?= get_site_url(); ?>">
    <meta name="description" content="<?= SITE["desc"]; ?>">
    <meta name="keywords" content="<?= SITE["keywords"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="geo.region" content="<?= REGION["region"]; ?>" />
    <meta name="geo.placename" content="<?= REGION["placename"]; ?>" />
    <meta name="geo.position" content="<?= REGION["position"]; ?>" />
    <meta name="ICBM" content="<?= REGION["icbm"]; ?>" />
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
    <meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.png">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?= SITE["name"] ?>">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/images/aquila-saude.png">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:description" content="<?= SITE["desc"]; ?>">
    <meta property="og:site_name" content="<?= SITE["name"] ?>"> <?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NM4G2R9"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
if (function_exists('custom_wp_body_open')) {
    wp_body_open();
}
?>

<h1 class="d-none"><?php echo(is_home()) ? 'Tropical Pet' : the_title()?></h1>

<?php
if(!is_404()):
?>
<!--header-->
<?php get_template_part('template-parts/header/header', 'header'); ?>
<!--end of header-->

<!-- whatsapp -->
<?php get_template_part('template-parts/header/header', 'whatsapp'); ?>
<!-- end of whatsapp -->
<!-- main -->
<main> <?php endif ?>