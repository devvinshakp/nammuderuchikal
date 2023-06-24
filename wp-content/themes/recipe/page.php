<?php get_header(); ?>
<section class="content">

 <div class="container">
    <div class="row">
 <div class="grid_7">
 <div class="blog">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<div class="blog_title"><?php the_title(); ?></div>
			<?php if(has_post_thumbnail()):?>
			<?php the_post_thumbnail(); ?>
            <?php endif; ?>
			<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>

</div>
</div>
<div class="grid_4 preffix_1">
         <h2>Categories</h2>
        <ul class="list">
          <?php
         $categories = get_categories(array(
             'orderby' => 'name',
             'parent' => 0
         ));
         foreach ($categories as $category) {
             if ($category->cat_name != 'Uncategorized') {
			?>
			  <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name ?></a></li>
			<?php }
		}	
	?> 
        </ul>
        <h2>Recent Posts</h2>
        <?php if (have_posts()):  query_posts('posts_per_page=3'); while (have_posts()): the_post(); ?> 	
        <div class="block3">
          <?php the_post_thumbnail('small_thumb'); ?>
          <div class="extra_wrapper">
            <div class="text1 color1">
           <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
          	</div>
             <?php $var=get_the_content();
			$var1=substr($var,0,200);
			echo strip_tags($var1);
            ?>
          
        </div>
        </div>
        <?php endwhile; ?>		
         <?php endif;?>	
     </div>
</div>
</div>
</div>
</section>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>