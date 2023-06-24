<?php

/*

Template Name: Full Width Page

*/
get_header(); ?>

<section class="content ctn__1"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
  <div class="container">
    <div class="row">



		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			

			<div class="post" id="post-<?php the_ID(); ?>">
             <h1 class="title1"><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		</div>
		</div>
		<?php endwhile; endif; ?>
	</div>

	</div>

</section>

<?php get_footer(); ?>