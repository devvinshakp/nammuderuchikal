<footer id="footer">  
<div class="container">    
<div class="row">      
<div class="grid_12">          
<div class="copyright">
<span class="line"><a href="<?php echo get_option('home');?>">Nammude Ruchikal </a> &copy; 2016 &nbsp;<span class="line1"></span></span><span class="line2">Website designed and developed by <a href="mailto:vinshakp7@gmail.com" title="vinsha, web developer">vkp</a></span>
</div>    
<div class="copyright cp">
<a href="<?php echo get_option('home');?>/privacy-policy/">Privacy Policy</a>
| <a href="<?php echo get_option('home');?>/sitemap">Sitemap</a>

</div>    
<div class="copyright cp">
<a href="https://www.facebook.com/nammuderuchikal/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/fb.png" alt="fb" /></a>
</div>
</div>      
</div>    
</div>
</footer> 
</body>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>

      <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script> 


      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.equalheights.js"></script>

      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>

	  <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>

      <script src="<?php bloginfo('template_directory'); ?>/js/touchTouch.jquery.js"></script>

      <script type="text/javascript"> 
function buttonClicked()
{
    document.getElementById('imgs').disabled = true;
}
if( $( '#site-loader' ).length ) {
		/* Event - Window Load */
		if (!$('html').is('.ie6, .ie7, .ie8'))
		{
			/* Event - Window Load */
			$(window).load(function()
			{		
				/* Loader */
				$("#site-loader").delay(1000).fadeOut("slow");
			});
			/* Event - Window Load /- */
		}
		else
		{
			$("#site-loader").css('display','none');
		}
		/* Event - Window Load /- */
	}

         $(document).ready(function(){  
		 
		  var flag = true;
		jQuery('.show_hide').click(function(){
		if(flag){
		jQuery("#access").slideToggle(1000);
		flag = false;
		}else{
		jQuery("#access").slideToggle(1000);
		flag = true;
		}	
   });
   	jQuery('#access li a').click(function(){
		jQuery("#access").hide(); });


         $('.gallery .gall_item').touchTouch();  

		 var flag = true;

		$(".search").click(function(){

			if(flag){

				$( "#search" ).show();

				flag = false;

			}else{

				$( "#search" ).hide("slow");

				flag = true;

			}	

		});
		

         });
		
		 

      </script>
</html>