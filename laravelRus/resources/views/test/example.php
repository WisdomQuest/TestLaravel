<!DOCTYPE html>
<html>
<head>
    <meta charset=“utf-8”>
    <title>HTML страничка</title>
</head>
<body>

<h1>Заголовок страницы</h1>


<p><?= $global_var ?></p>

<p>
    <?= $a . ' ' . $b ?></p>
<?php if (isset($composer_data)) { ?>
    <p>composer_data : <?= $composer_data ?></p>
<?php } ?>
