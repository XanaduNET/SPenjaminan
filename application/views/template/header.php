<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title><?=$title;?></title>


    <!-- Site favicon -->
    <script src="<?=base_url('assets/');?>vendors/scripts/dashboard.js"></script>
    <script src="<?=base_url('assets/');?>js/jquery-3.3.1.js">
    </script>
    <script src=" <?=base_url('assets/');?>js/bootstrap.js">
    </script>
    <script src=" <?=base_url('assets/');?>js/jquery-ui.js">
    </script>

    <script src="<?=base_url('assets/');?>vendors/scripts/script.min.js"></script>

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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

</head>