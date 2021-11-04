<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title><?=$title;?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() . 'css/bootstrap.css' ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() . 'css/jquery-ui.css' ?>" type="text/css">
    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/');?>vendors/images/logo-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/');?>vendors/images/logo-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/');?>vendors/images/logo-icon.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?=base_url('assets/');?>src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?=base_url('assets/');?>src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
    </script>
</head>