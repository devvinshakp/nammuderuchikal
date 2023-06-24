<?php get_header(); ?>	
<section class="content"> 
   <div class="container con1">
   <div class="row">
      <?php
         $categories = get_categories(array(
             'orderby' => 'name',
             'parent' => 0
         ));
         $i          = 0;
         foreach ($categories as $category) {
             if ($category->cat_name != 'Uncategorized') {
                 if ($i % 2 == 0) {
         ?>		
      <div class="grid_4 wow SlideInDown g1">
         <div class="banner">
            <div class="gall_block">
             <a href="<?php echo get_category_link($category->term_id); ?>" class="box_l_hover"></a>
               <?php z_taxonomy_image($category->term_id, full); ?>          
               <div class="bann_capt ">
                  <div class="maxheight">
                     <div class="bann_title"><?php
                        echo $category->name;
                        ?></div>
                  </div>
               </div>
              
            </div>
         </div>
         
      </div>
      <?php
         } else {
         ?> 	
      <div class="grid_4 g2 wow SlideInDown"> 
         <div class="banner">
            <div class="gall_block">
            <a href="<?php echo get_category_link($category->term_id); ?>" class="box_l_hover"></a>
               <div class="bann_capt ">
                  <div class="maxheight">
                     <div class="bann_title"><?php
                        echo $category->name;
                        ?></div>
                 </div>
               </div>
               <?php z_taxonomy_image($category->term_id); ?>        
            </div>
         </div> 
       </div>
      <?php
         }
         $i++;
         }
         }
         ?>
      <div class="grid_12">
         <div class="box">
            <div class="row">
               <div class="grid_5 preffix_1 wel">
                  <h2>Welcome</h2>
                  <p>We love mom made food! But then, who doesn't?<br />
Through <strong class="color1">Nammude Ruchikal </strong>we share our passion towards the magic of food with you.  It can be traditional, modern or something we accidentally discovered during our cooking experiments. We guarantee to fill your tummy and heart with happiness.
</p>
                         
                  <a href="<?php echo get_option('home');?>/about/" class="btn">more</a>            
               </div>
               <div class="grid_5 wel">
                  <h2>Post your Recipes</h2>
                  <p>Its time to reval your taste secret. <br>
				  And the best part of Nammude Ruchikal is, you could share your recipes with us too! <br>
				  Where's the fun in food without sharing, huh?. <br>
				  We will publish your recipes within 24 hours in our website.<br>
				  Lets Go to Your page</p>             
                  <a href="<?php echo get_option('home');?>/your-recipe/" class="btn">more</a>           
               </div>
            </div>
         </div>
      </div>
      <div class="grid_12">
         <h2>Our Recent Recipes</h2>
      </div>
      <div class="gallery">
         <?php if (have_posts()): query_posts('posts_per_page=3');
            while (have_posts()): the_post(); ?>        
         <div class="grid_4 b1">
            <div class="gall_item"><?php the_post_thumbnail( 'category-thumb' ); ?></div>
            <a href="<?php the_permalink();?>" class="link1">+</a>
			 <a href="<?php the_permalink();?>" class="title t1"><span class="t2"><?php the_title(); ?></span></a>
            <div class="clear"></div>
         </div>
         <?php endwhile; ?>		
         <?php endif;?>		      
      </div>
   </div>
</section> 
<?php //get_sidebar(); ?>
<?php get_footer();  ?>