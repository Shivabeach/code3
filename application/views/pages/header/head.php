<?php require('/home/vanhorn2/public_html/zbblock/zbblock.php'); ?><!DOCTYPE html><html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                'content' => 'DNA, Ancestry, England, Germany, Norway, history, names, cousin, great-grandfather, mother, father, relatives, New Jersey, arrival, sailing ships, Sweden, hapalogs, haplogroup, STR, allele, SNP, ancestors, YSEQ'
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
                'content' => 'charset="UTF-8"'
        )
    );
    echo meta($meta);
    ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/flex-dist.css');?>" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/hover/css/hover.css');?>" media="screen">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/pure/tables-min.css');?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/pure/forms-min.css');?>" media="screen">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/vert/vertical-tabs.css');?>">
  </head>
