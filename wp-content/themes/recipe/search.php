<?php get_header(); ?>
<section class="content gallery pad1">
   <div class="container e1">
   <div class="row">
   <div class="grid_12">
   </div>
	<?php if (have_posts()) : 
		while (have_posts()): the_post(); ?>        
         <div class="grid_4 wow SlideInDown">
         <div class="gall_block">
          <div class="maxheight">
            <a href="<?php the_permalink(); ?>" class="gall_item"><?php the_post_thumbnail(); ?></a>
            <div class="gall_bot">
            <div class="text1"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
            <?php $var=get_the_content();
							$var1=substr($var,0,300);
							echo strip_tags($var1);
            ?>
            <br>
            <a href="<?php the_permalink();?>" class="btn">more</a>
            </div>
             </div>
             </div>
         </div>
         <?php endwhile;  ?>			 		 <div class="navigation_bot">			<?php wp_pagenavi(); ?>		</div>

<?php else : ?>

	<h2 class="center">Not Found</h2>

<?php endif; ?>

</div>
   </div>
</section> 
<?php get_footer(); ?>