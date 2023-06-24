<?php get_header(); ?>
<section class="content gallery pad1">
   <div class="container">
   <div class="row">
   <div class="grid_12">
 		<?php is_tag(); ?>

		<?php  if (have_posts()) : ?>

	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

 	  <?php /* If this is a category archive */ if (is_category()) { ?>

		<h2 class="title1"><?php single_cat_title(); ?></h2>

 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

		<h2 class="title1"><?php single_tag_title(); ?></h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

		<h2 class="title1"><?php the_time('F jS, Y'); ?></h2>

 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

		<h2 class="title1"><?php the_time('F, Y'); ?></h2>

 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

		<h2 class="title1"><?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>

		<h2 class="title1">Author Archive</h2>

 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

		<h2 class="title1">Blog Archives</h2>

 	  <?php } ?>
</div>
</div>
   <div class="row">
   <div class="col">
         <?php   while (have_posts()): the_post(); ?>  
         <div class="grid_4 b1 g11 wow SlideInDown" id="#rec">
            <a href="<?php the_permalink();?>" class="gall_item"><?php the_post_thumbnail( 'category-thumb' ); ?></a>
            <a href="<?php the_permalink();?>" class="title"><span><?php the_title(); ?></span></a>
        </div>
         <?php endwhile; ?>		
              
<div class="navigation_bot">
	<?php wp_pagenavi(); ?>
</div>

<?php else : ?>

<h2 class="center">Not Found</h2>

<?php endif; ?>

</div>
   </div>
   </div>
</section> 

<?php get_footer(); ?>