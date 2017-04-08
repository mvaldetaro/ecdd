<?php
/**
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ECDD
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="pt-BR" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class();?> >
<div class="wrap">
