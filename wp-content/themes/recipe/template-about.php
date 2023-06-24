<?php 
/* Template Name: About*/
get_header(); ?>
<section class="content">
 <div class="container">
    <div class="row">
 <div class="grid_12 abt">
 <div class="blog">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<div class="blog_title"><?php the_title(); ?></div>
			<div class="cont"><?php the_content(); ?></div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>