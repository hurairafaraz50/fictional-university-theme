<?php
while(have_posts())
{
 the_post(); ?>
 <h1>this is the pagr not a post</h1>
 <h2><?php the_title() ?> </h2>
 <?php  the_content() ?>
 <hr>
   
   <?php
}
?>


