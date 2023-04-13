<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" href="<?php echo $path ?>images/favicon96.ico" size="96x96">
    <link rel="apple-touch-icon" href="<?php echo $path ?>images/oapple-touch-icon180.png">

    <!-- Google Fonts for logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $path ?>style/default.css?<?php echo filemtime($path .'style/default.css'); ?>">
    <link rel="stylesheet" href="<?php echo $path ?>style/header.css?<?php echo filemtime($path .'style/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo $path ?>style/footer.css?<?php echo filemtime($path .'style/footer.css'); ?>">
    <link rel="stylesheet" href="<?php echo $path ?>style/<?php echo $style ?>.css?<?php echo filemtime($path .'style/' . $style . '.css'); ?>">

    <!-- Google Search Console -->
    <meta name="google-site-verification" content="rYJHGR_uUcxmqkD9mSn79HxxWq4ikIz755zQGjaf87A" />
</head>