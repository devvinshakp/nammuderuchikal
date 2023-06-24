<?php get_header(); ?>
<section class="content">

 <div class="container">
    <div class="row">
 <div class="grid_7">
 <div class="blog bsi">
 <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<div class="blog_title sing"><?php the_title(); ?></div>
			<?php if(has_post_thumbnail()):?>
			<?php the_post_thumbnail(); ?>
            <?php endif; ?>
			<!-- /167873238/Singlepagetop -->
<div id='div-gpt-ad-1478707655061-0' style='height:90px; width:728px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1478707655061-0'); });
</script>
</div>
			
			<!-- /167873238/Singlepagetop -->
			
			<?php the_content();  ?>
			<!-- /167873238/Singlepage2 -->
<div id='div-gpt-ad-1478707796406-0' style='height:90px; width:728px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1478707796406-0'); });
</script>
</div>
			
<!-- /167873238/Singlepage2 -->
	
</div>




<?php comments_template(); ?>

<?php endwhile; 
?>
<div class="alignleft"><?php previous_post_link(); ?> </div>
<div class="alignright"> <?php next_post_link(); ?></div>
<?php else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>
</div>
<div class="grid_4 preffix_1 rightside">
		
         <h2>Recipe by</h2>
         <?php if(get_field('author_image')) { ?>
        <div class="author_img">
		 <img id="imgs" src="<?php the_field('author_image'); ?>" alt="Author" onclick="return buttonClicked()" />
         </div> <?php } ?>
         <?php if(get_field('author_name')) { 
		 $name=get_field('author_name');
         echo '<div class="author_name">'.$name.'</div>';
		 }?>
		 <br><br>
		 <?php
echo get_the_tag_list('<p>Tags: ',', ','</p>');
?>
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
           <a href="<?php the_permalink();?>" class="sm_thumb"><?php the_post_thumbnail('small_thumb'); ?></a>
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
		 <!-- /167873238/singlepagerightside -->
<div id='div-gpt-ad-1478707957899-0' style='height:320px; width:480px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1478707957899-0'); });
</script>
</div>
     </div>
</div>
</div>
</div>
</section>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>