<?php
/*
Template Name: Home
*/
?>
<?php get_template_part('templates/header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php $post_id=''; ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php include basement_sidebar_path(); ?>	
<?php get_template_part('templates/footer'); ?>