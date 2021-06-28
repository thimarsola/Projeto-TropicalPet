<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * Product
 */
$productCss = new MatthiasMullie\Minify\CSS();
$productCss->add(dirname(__DIR__, 1) . "/assets/css/style-product.css");
$productCss->minify(dirname(__DIR__, 1) . "/assets/css/style-product.min.css");

/**
 * Blog
 */
$blogCss = new MatthiasMullie\Minify\CSS();
$blogCss->add(dirname(__DIR__, 1) . "/assets/css/style-blog.css");
$blogCss->minify(dirname(__DIR__, 1) . "/assets/css/style-blog.min.css");

/**
 * Single
 */
$singleCss = new MatthiasMullie\Minify\CSS();
$singleCss->add(dirname(__DIR__, 1) . "/assets/css/style-single.css");
$singleCss->minify(dirname(__DIR__, 1) . "/assets/css/style-single.min.css");

/**
 * 404
 */
$errorCss = new MatthiasMullie\Minify\CSS();
$errorCss->add(dirname(__DIR__, 1) . "/assets/css/style-error.css");
$errorCss->minify(dirname(__DIR__, 1) . "/assets/css/style-error.min.css");

/**
 * js
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/owl.carousel.min.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/carousel.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/gallery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/toggle.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/request.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/animation.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$homeJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");

/**
 * page
 */
$productJs = new MatthiasMullie\Minify\JS();
$productJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$productJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$productJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$productJs->minify(dirname(__DIR__, 1) . "/assets/js/script-product.min.js");

/**
 * blog
 */
$blogJs = new MatthiasMullie\Minify\JS();
$blogJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$blogJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$blogJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$blogJs->minify(dirname(__DIR__, 1) . "/assets/js/script-blog.min.js");

/**
 * Single
 */
$singleJs = new MatthiasMullie\Minify\JS();
$singleJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$singleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$singleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$singleJs->minify(dirname(__DIR__, 1) . "/assets/js/script-single.min.js");

/**
 * Error
 */
$errorJs = new MatthiasMullie\Minify\JS();
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$errorJs->minify(dirname(__DIR__, 1) . "/assets/js/script-error.min.js");