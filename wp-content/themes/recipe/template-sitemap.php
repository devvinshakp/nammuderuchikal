<?php /* Template Name: Sitemap */ get_header(); ?>

<section class="content">



 <div class="container">

    <div class="row">

 <div class="grid_7">

 <div class="blog"> 


<div class="sitemap-loop-b">
<ul>
<?php $sitemaploop = new WP_Query( array( 
        'post_type' => 'post', 
        'posts_per_page' => -1, 
        'post_status' => 'publish' 
));?>

<?php while ( $sitemaploop->have_posts() ) : $sitemaploop->the_post(); ?>
<li>
<a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<br>

<?php endwhile; ?>
</ul>
<?php wp_reset_query(); ?>

</div><!-- sitemap-loop-b -->



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