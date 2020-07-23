<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo isset($webDescription)?$webDescription:"";?>">
    <meta name="keywords" content="<?php echo isset($webKeywords)?$webKeywords:"";?>">

    <title><?php echo isset($webTitle)?$webTitle:"";?></title>

    <link rel="shortcut icon" href="<?php echo base_url('icon.png');?>">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:800,800i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/mdb.min.css');?>" />

    <!-- Font Awesome CSS -->
    <link href="<?php echo base_url('assets/fonts/fontawesome/css/all.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    
    <!-- More CSS Files -->
    <?php if (isset($cssUrls)) {
        foreach ($cssUrls as $url) echo '<link rel="stylesheet" href="'.$url.'">';
    }?>

    <!-- Custom JS Scripts for Header -->
    <?php if (isset($jsHeaderScripts)) {
        foreach ($jsHeaderScripts as $script) echo '<script>'.$script.'</script>';
    }?>
  </head>
  <body>