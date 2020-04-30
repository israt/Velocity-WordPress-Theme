<?php



/************



 *  This is Home page main Template file *



 *  Template Name: HomePage



 ***********/



get_header(); ?>

    <section class="banner-area">
    	<ul class="bxslider">
        
        	<?php
					$args = array(
					'post_type' => 'banner',
					  'orderby' => 'name',
					  'order' => 'DESC',	
					  );					  
					  $query = new WP_Query($args);
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
						$feat_image3 = '';
							if (has_post_thumbnail( $post->ID ) ){ 
							$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
							}
					     
			      ?>
        
                  <li>
                  		<img src="<?php echo $feat_image3; ?>" alt="banner1">
                  </li>
                  
                   <?php endwhile; 
						 wp_reset_postdata();?>	
				  <?php endif; ?> 
        </ul>								
    </section>
    <!--banner-area ends.......-->
    
    <section class="buisness" id="telephone">
    	<div class="container">
        	<div class="section-title">
        		<h1><?php echo of_get_option('hh','no entry');?></h1>
            </div>
            <!--section-title ends.....-->
            
        	<div class="col-md-4 col-sm-4">
            	<div class="single-business">
                	<i class="fa fa-briefcase" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('h1','no entry');?></h2>
                    <p><?php echo of_get_option('hc1','no entry');?></p>	
                </div>
                <!--single-business ends....-->	
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
            
            <div class="col-md-4 col-sm-4">
            	<div class="single-business">
                	<i class="fa fa-calculator" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('h2','no entry');?></h2>
                    <p><?php echo of_get_option('hc2','no entry');?></p>	
                </div>
                <!--single-business ends....-->	
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
            
            <div class="col-md-4 col-sm-4">
            	<div class="single-business">
                	<i class="fa fa-cogs" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('h3','no entry');?></h2>
                    <p><?php echo of_get_option('hc3','no entry');?></p>	
                </div>
                <!--single-business ends....-->	
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
        </div>
        <!-- container ends....-->	
    </section>
     <!--section  buisness ends.......-->
     
     
     <section class="feature" id="feature">
    	<div class="container">
        	<div class="section-title-white">
        		<h1>Features</h1>
            </div>
            <!--section-title-white ends.....-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-feature">
                	<i class="fa fa-volume-up" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('ft1','no entry');?></h2>
                    <p><?php echo of_get_option('fc1','no entry');?></p>	
                </div>
                <!--single-feature ends....-->	
            </div>	
            <!--col-md-3 col-sm-3 ends...-->
            
             <div class="col-md-3 col-sm-3">
            	<div class="single-feature">
                	<i class="fa fa-cubes" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('ft2','no entry');?></h2>
                    <p><?php echo of_get_option('fc2','no entry');?></p>	
                </div>
                <!--single-feature ends....-->	
            </div>	
            <!--col-md-3 col-sm-3 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-feature">
                	<i class="fa fa-building" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('ft3','no entry');?></h2>
                    <p><?php echo of_get_option('fc3','no entry');?></p>	
                </div>
                <!--single-feature ends....-->	
            </div>	
            <!--col-md-3 col-sm-3 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-feature">
                	<i class="fa fa-envelope" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('ft4','no entry');?></h2>
                    <p><?php echo of_get_option('fc4','no entry');?></p>	
                </div>
                <!--single-feature ends....-->	
            </div>	
            <!--col-md-3 col-sm-3 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-feature">
                	<i class="fa fa-history" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('ft5','no entry');?></h2>
                    <p><?php echo of_get_option('fc5','no entry');?></p>	
                </div>
                <!--single-feature ends....-->	
            </div>	
            <!--col-md-3 col-sm-3 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-feature">
                	<i class="fa fa-play" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('ft6','no entry');?></h2>
                    <p><?php echo of_get_option('fc6','no entry');?></p>	
                </div>
                <!--single-feature ends....-->	
            </div>	
            <!--col-md-3 col-sm-3 ends...-->
            
        	<div class="col-md-3 col-sm-3">
            	<div class="single-feature">
                    <i class="fa fa-crosshairs" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('ft7','no entry');?></h2>
                    <p><?php echo of_get_option('fc7','no entry');?></p>	
                </div>
                <!--single-feature ends....-->	
            </div>	
            <!--col-md-3 col-sm-3 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-feature">
                	<i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('ft8','no entry');?></h2>
                    <p><?php echo of_get_option('fc8','no entry');?></p>	
                </div>
                <!--single-feature ends....-->	
            </div>	
            <!--col-md-3 col-sm-3 ends...-->
        </div>
        <!-- container ends....-->	
    </section>
     <!--section  feature ends.......-->
     
     
     <section class="plan" id="plans">
    	<div class="container">
        	<div class="section-title">
        		<h1><?php echo of_get_option('hp','no entry');?></h1>
                 <!--<hr/>-->
                <p><?php echo of_get_option('hpp','no entry');?></p>
            </div>
            <!--section-title-white ends.....-->
            
        	<!--pricing table.....-->
             <div class="pricing pricing--norbu">
                <div class="pricing__item">
                    <h3 class="pricing__title"><?php echo of_get_option('ht1','no entry');?></h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span><?php echo of_get_option('price1','no entry');?><span class="pricing__period">/ month</span></div>
                    
                    <?php echo of_get_option('list1','no entry');?>
                    
                    <a href="#contact" data-uk-smooth-scroll><button class="pricing__action">Buy Now</button></a>
                </div>
                <div class="pricing__item">
                    <h3 class="pricing__title"><?php echo of_get_option('ht2','no entry');?></h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span><?php echo of_get_option('price2','no entry');?><span class="pricing__period">/ month</span></div>
                    
                    <?php echo of_get_option('list2','no entry');?>
                    
                    <a href="#contact" data-uk-smooth-scroll><button class="pricing__action">Buy Now</button></a>
                </div>
            </div>
            <!--pricing table ends....-->
        </div>
        <!-- container ends....-->	
    </section>
     <!--section  plan ends.......-->
     
     
  <section class="phones" id="phones">
    	<div class="container">
        	<div class="section-title">
        		<h1><?php echo of_get_option('phone','no entry');?></h1>
                <!--<hr/>-->
                <p><?php echo of_get_option('phone-c','no entry');?></p>
            </div>
            <!--section-title-white ends.....-->
            
        		<main class="cd-main-content">
                    <div class="cd-tab-filter-wrapper">
                        <div class="cd-tab-filter">
                            <ul class="cd-filters">
                                <li class="placeholder"> 
                                    <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                                </li> 
                               
                                <li class="filter" data-filter=".desk-phone"><a href="#0" class="selected" data-type="desk-phone">Desk Phones</a></li>
                                <li class="dis"><a href="#0">/</a></li>
                                <li class="filter" data-filter=".cordless"><a href="#0" data-type="cordless">Cordless Phones</a></li>
                                <li class="dis"><a href="#0">/</a></li>				
                                <li class="filter" data-filter=".conference"><a href="#0" data-type="conference">Conference Phones</a></li>
                                <li class="dis"><a href="#0">/</a></li>
                                <li class="filter" data-filter=".reception"><a href="#0" data-type="reception">Receptionist</a></li>	
                                <li class="dis"><a href="#0">/</a></li>			
                                <li class="filter" data-filter=".head"><a href="#0" data-type="head">Headsets</a></li>
                                
                            </ul> <!-- cd-filters -->
                        </div> <!-- cd-tab-filter -->
                    </div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul>
            

            
            	
                  
                  
                  <?php
					$args = array(
					'post_type' => 'phones',
					  'orderby' => 'name',
					  'order' => 'ASC',	
					  );					  
					  $query = new WP_Query($args);
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
						$feat_image8 = '';
							if (has_post_thumbnail( $post->ID ) ){ 
							$feat_image8 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
							}
							
						//	$categories = get_the_category();
					     
			      ?>
                  
                  
            
            	<!--box1 starts------------------------------>
				<li class="mix <?php echo $link=get_post_meta(get_the_ID(),"category",true)?>">
                	<div class="single-phones" id="myBtn<?php echo get_the_ID()?>">
                        <img src="<?php echo $feat_image8; ?>" alt="phone">  
                        <h2><?php the_title(); ?></h2> 
                        <p><?php the_subtitle(); ?></p> 
                        <div class="learn">
                        	<a href="" onclick="sayHi(event);">Learn More</a>	
                        </div>	
                        
                    </div>
                    <!--single-phone ends....-->
                    
                    <!-- Modal 1 -->
                  <div class="modal fade" id="myModal<?php echo get_the_ID()?>" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><?php the_title(); ?></h4>
                        </div>
                        <div class="modal-body">
                        	<div class="single-phones2">
                                <img src="<?php echo $feat_image8; ?>" alt="phone">  
                                <h2><?php the_title(); ?></h2> 
                                <p><?php the_subtitle(); ?></p> 
                            </div>
                            <!--single-phone ends....-->
                        	<?php the_content(); ?>
                            
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Modal 1 ends...-->
                </li>
                
                 <?php endwhile; 
						 wp_reset_postdata();?>	
				  <?php endif; ?> 
                  

				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
		</section> <!-- cd-gallery -->
		
	</main> <!-- cd-main-content -->
    
        </div>
        <!-- container ends....-->	
    </section>
     <!--section  phone ends.......-->
     
     
      <section class="virtual" id="virtual">
    	<div class="container">
        	<div class="section-title-white">
        		<h1><?php echo of_get_option('virtual','no entry');?></h1>
                <!--<hr/>-->
                <p><?php echo of_get_option('virtual-c','no entry');?></p>
            </div>
            <!--section-title-white ends.....-->
            
        	<div class="col-md-12 col-sm-12">
            	<div class="single-virtual">
                	<?php echo of_get_option('virtual-list','no entry');?>
                </div>
                <!--single-virtual ends....-->
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
            
            <div class="vir-pb">
            	<h4>Virtual PBX Plans </h4>
                <div class="col-md-3 col-md-3">
                	<div class="single-price">
                    	<?php echo of_get_option('price-1','no entry');?>
                    </div>
                    <!--single-price ends....-->
                </div>	
                <!--col-md-3 col-md-4 ends....-->
                
                <div class="col-md-3 col-md-3">
                	<div class="single-price">
                    	<?php echo of_get_option('price-2','no entry');?>
                    </div>
                    <!--single-price ends....-->
                </div>	
                <!--col-md-3 col-md-4 ends....-->
                
                <div class="col-md-3 col-md-3">
                	<div class="single-price">
                    	<?php echo of_get_option('price-3','no entry');?>
                    </div>
                    <!--single-price ends....-->
                </div>	
                <!--col-md-3 col-md-4 ends....-->
                
                <div class="col-md-3 col-md-3">
                	<div class="single-price">
                    	<?php echo of_get_option('price-4','no entry');?>
                    </div>
                    <!--single-price ends....-->
                </div>	
                <!--col-md-3 col-md-4 ends....-->
            </div>
            <!--vir-pb ends.....-->
            
        </div>
        <!-- container ends....-->	
    </section>
     <!--section  virtual ends.......-->
     
     
     <section class="fax" id="efax">
    	<div class="container">
        	<div class="section-title">
        		<h1><?php echo of_get_option('efax','no entry');?></h1>
                <p><?php echo of_get_option('efax-c','no entry');?></p>
            </div>
            <!--section-title ends.....-->
            
        	<div class="col-md-3 col-sm-3">
            	<div class="single-fax">
                	<i class="fa fa-money" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('e1','no entry');?></h2>
                </div>
                <!--single-fax ends....-->	
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-fax">
                	<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('e2','no entry');?></h2>
                </div>
                <!--single-fax ends....-->	
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-fax">
                	<i class="fa fa-fax" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('e3','no entry');?></h2>
                </div>
                <!--single-fax ends....-->	
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
            
            <div class="col-md-3 col-sm-3">
            	<div class="single-fax">
                	<i class="fa fa-calendar" aria-hidden="true"></i>
                    <h2><?php echo of_get_option('e4','no entry');?></h2>
                </div>
                <!--single-fax ends....-->	
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
            
        </div>
        <!-- container ends....-->	
    </section>
     <!--section  faxs ends.......-->
     
     
     <section class="faq" id="faq">
    	<div class="container">
        	<div class="section-title">
        		<h1>Faq</h1>
            </div>
            <!--section-title ends.....-->
            
        	<div class="col-md-12 col-sm-12">
            	<div class="single-faq">
                	<!--accordion...........-->
                    <ul class="accordion">
                    
                     <?php
					$args = array(
					'post_type' => 'faq',
					  'orderby' => 'name',
					  'order' => 'DESC',	
					  );					  
					  $query = new WP_Query($args);
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
						$feat_image3 = '';
							if (has_post_thumbnail( $post->ID ) ){ 
							$feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
							}
					     
			      ?>
                  
                  
                      <li class="accordion__item js-contentToggle">
                        <button class="accordion__trigger js-contentToggle__trigger" type="button"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php the_title(); ?></button>
                        <div class="accordion__content is-hidden js-contentToggle__content">
                          <p><?php the_content(); ?></p>
                        </div>
                      </li>
                      
                      <?php endwhile; 
						 wp_reset_postdata();?>	
				  <?php endif; ?> 
                 
                    </ul>
                    <!--accordion ends...........-->
                	
                </div>
                <!--single-faq ends....-->	
            </div>	
            <!--col-md-4 col-sm-4 ends...-->
            
        </div>
        <!-- container ends....-->	
    </section>
     <!--section  faq ends.......-->
     
     
     <section class="contact" id="contact">
    	<div class="container">
        	<div class="section-title">
        		<h1>Contact Us</h1>
            </div>
            <!--section-title ends.....-->
            <?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]'); ?>
            
        </div>
        <!-- container ends....-->	
    </section>
     <!--section  contact ends.......-->



<?php get_footer(); ?>