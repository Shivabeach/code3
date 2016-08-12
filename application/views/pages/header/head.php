<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <?php
    $meta = array(
        array(
                'name'    => 'robots',
                'content' => 'no-cache'
        ),
        array(
                'name'    => 'description',
                'content' => 'VanHorn Bostick Family Linage. The story of the four families from Norway, England and the transistion from Europe to America'
        ),
        array(
                'name'    => 'keywords',
                'content' => 'DNA, Ancestry, England, Germany, Norway, history, names, cousin, great-grandfather, mother, father, relatives, New Jersey, arrival, sailing ships'
        ),
        array(
                'name'    => 'author',
                'content' => 'Brad VanHorn'
        ),
        array(
                'name'    => 'generator',
                'content' => 'Atom'
        ),
        array(
                'name'    => 'Content-type',
                'content' => 'text/html; charset=utf-8', 'type' => 'equiv'
        )
    );
    echo meta($meta);
    ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/flex-dist.css');?>" media="screen" title="no title" charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/pure/pure.min.css');?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/jquery-ui/themes/redmond/jquery-ui.css');?>" media="screen">
  </head>
