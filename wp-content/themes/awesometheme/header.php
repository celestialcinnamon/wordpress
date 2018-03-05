<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awesome Theme</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_nav_menu(array(
        'theme_location' => 'primary'
    )); ?>