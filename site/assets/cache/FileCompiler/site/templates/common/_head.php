<?php
namespace ProcessWire;
?>
<meta charset="utf-8">
<title><?= $page->seo_title ? $page->seo_title : $page->title; ?></title>
<meta name="description" content="description">
<meta name="author" content="Vasiliy">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?= $config->urls->templates . 'assets/css/reset.css' ?>">

<!--Font-->
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400" rel="stylesheet">

<!--JQuery-->
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<!--SLICK SLIDER-->
<link rel="stylesheet" href="<?= $config->urls->templates . "assets/lib/slick.css" ?>">
<script src="<?=  $config->urls->templates . 'assets/lib/slick.min.js'?>"></script>

<!-- UIKIT -->
<link rel="stylesheet" href="<?= $config->urls->templates . 'assets/lib/ukit/css/uikit.min.css' ?>">
<script src="<?= $config->urls->templates . 'assets/lib/ukit/js/uikit.min.js' ?>"></script>

<script src="<?= $config->urls->templates . 'assets/lib/ukit/js/core/offcanvas.min.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/lib/ukit/js/components/parallax.min.js'?>"></script>

<!-- CSS -->
<link rel="stylesheet" href="<?= $config->urls->templates . 'assets/css/main.css'?>">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

