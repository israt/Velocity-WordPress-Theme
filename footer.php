     
     <footer>
     	<div class="container">
        	<p><?php echo of_get_option('copyright_ftext','no entry');?></p>
        </div>
     </footer>
     <!--footer ends........-->
     
    
     <a href="#logo7" class="scroll-icon" data-uk-smooth-scroll><i class="fa fa-angle-up" aria-hidden="true"></i></a>
     
     
     


<!-- **** JS(Java Script) FILES****** --> 
<!-- Lib -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>
<!-- BOOTSTRAP js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>

<!-- bx JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
</script>

<!--modal------->
<script>
$(document).ready(function(){
	
	 <?php
					$args = array(
					'post_type' => 'phones',
					  'orderby' => 'name',
					  'order' => 'ASC',	
					  );					  
					  $query = new WP_Query($args);
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
						
					     
			      ?>
    $("#myBtn<?php echo get_the_ID()?>").click(function(){
        $("#myModal<?php echo get_the_ID()?>").modal();
    });
	
	 <?php endwhile; 
				wp_reset_postdata();?>	
	<?php endif; ?> 
                  
	
});
</script>

<!--accordion.....-->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.contenttoggle.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>

<!--uikit.....-->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/uikit.js"></script>

<!-- write script to toggle class on scroll -->
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
		$('.logo-area').css("display","none");
		$('.logo-area2').css("display","block");
		
    }
    else{
        $('header').removeClass("sticky");
		$('.logo-area').css("display","block");
		$('.logo-area2').css("display","none");
    }
});
</script>

<!--for responsive menu -->

<script>
$(".fa-bars").click(function() {
	$(".menu-area ul").slideToggle(1000);
	$(".menu-area ul li").click(function() {
            	$('.menu-area ul').hide();
        	});
    
});
</script>

<script type="text/javascript"> 
		$(document).ready(function(){
			$(window).scroll(function(){
				
				var dis = $(window).scrollTop();
				
				if ( dis > 200 ) {
					$('.scroll-icon').fadeIn();
				}
				else {
					$('.scroll-icon').fadeOut();
				}
			});
			
			
			
		});
</script>



<!--filter js.....-->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/filter/js/jquery.mixitup.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/filter/js/main.js"></script> <!-- Resource jQuery -->
<script type="text/javascript"> 
		$('.container').mixItUp({
	load: {
		filter: '.desk-phone'
	},
	controls: {
		toggleFilterButtons: true
	}
});
</script>


<script type="text/javascript">
	function sayHi(e) {
	   e.preventDefault();
	   
	}
</script>

<?php wp_footer(); ?>

</body>
</html>

