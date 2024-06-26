<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=APP_TITTLE?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS from BootStrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link href="<?php echo URL; ?>/assets/css/style.css" rel="stylesheet">                
</head>
<body>

   
<header class="">
    <!-- logo -->
    <div class="logo">
      <?=APP_TITTLE?>
    </div>
   
      
    <!-- navigation -->
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL; ?>home/exampleone">subpage</a>
        <a href="<?php echo URL; ?>home/exampletwo">subpage 2</a>
        <a href="<?php echo URL; ?>songs">songs</a>
        <a href="<?php echo URL; ?>housings">Houses</a>
    </div>
   
 </header>


