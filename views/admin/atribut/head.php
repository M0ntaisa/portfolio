<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ablepro v7.0 bootstrap admin template by Phoenixcoded</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded" />

    <link rel="icon" href="../../assets/admin/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/admin/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/admin/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="../../assets/admin/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="../../assets/admin/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/admin/assets/css/widget.css">

    <?php
    $content = (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_REQUEST['content'])) ? str_replace('-', '_', $_REQUEST['content']) : $_REQUEST['content'];
    if (file_exists('css/' . $content . '.php')) {
        switch ($content) {
            case $content:
                include_once 'css/' . str_replace('-', '_', $content) . '.php';
                break;
        }
    }
    ?>

    <!-- jquery cdn -->
    <script rel="preload" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>