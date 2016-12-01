<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= PROJECT_TITLE ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="<?= URL ?>assets/css/stylesheet.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<nav>
    <a href="<?= URL ?>">Home</a>
    <a style="float: right" class="button" id="logout-trig" href="">Logout</a>
    <a style="float: right" href="">Welcome <?= session::get('name') ?> </a>

</nav>
