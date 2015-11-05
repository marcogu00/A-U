<?php 
//Template name: index 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php bloginfo('url'); ?>" class="navbar-brand">A-U</a>
			</div>	
			<div class="collapse navbar-collapse navbar-ex1-collapse ">
				
				<?php wp_nav_menu(
					array(
					'container' => false,
					'items_wrap' => '<ul class="nav navbar-nav navbar-center">%3$s</ul>',
					'theme_location' => 'menuprincipal'));
				?>
				<ul class="nav navbar-nav navbar-right">
				 	<li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carrito.png" alt=""></a></li>
				 </ul> 
			</div>
		</nav>
	</header>
	<section class="main container">
		
			<h3 class="text-center">Categorias</h3>

			<div class="row">
			
			<?php
				$args = array(
 					'taxonomy' => 'product_cat',
 					'number' => 2,
 					'hide_empty' => 0
 				);
 				$all_categories = get_categories( $args );
 				foreach ($all_categories as $cat) {
 				    $thumbnail_id = get_woocommerce_term_meta($cat->term_id,'thumbnail_id',true);
 					
 					?>
				<div class="col-xs-12 col-sm-6">
					<div class="category-home">
 						<img class="attachment-thumbnail wp-post-img" width="150" height="150" src="<?php echo wp_get_attachment_url($thumbnail_id,'thumbnail'); ?>" alt="">
 						<?php echo get_the_post_thumbnail($cat->term_id,'thumbnail'); ?>
 						<div class="category-opacity">
 							<h1><a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>"><?php echo $cat->name; ?></a></h1> 							
 						</div>
						
					</div>
					
				</div>

			<?php	
 				}
			?>
		
			</div>
			
			<h3 class="text-left">Nuestras Promociones</h3>
		
                   
           
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <?php 
                 $slide  = CFS()->get('slideshow');
                 if($slide){
    				foreach ( $slide as $sl){ ?>
                     	
                   <div class="carousel-inner slides " role="listbox">
                     <div class="item active">
                       <img src="<?php echo $sl['imagen']; ?>" alt="">
                       <div class="carousel-caption">
                         <p><?php echo $sl['descripcion']; ?></p>
                       </div>
                     </div>
       
                   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                   </a>
                 
               </div>
             </div>
               <?php 
              		}
              	}
              	
               ?>
               <!--fin slide-->
      
			<h3 class="text-center">Nuestras Novedades</h3>
		
			<?php
				$args = array(
			'post_type' => 'product',
			'posts_per_page' => 3
			);
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();?>
				
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
					
					<?php  wc_get_template_part( 'content','product' );
				?>
					
				
				</div>
				<?php  
		
					endwhile;
					} 
					wp_reset_postdata();
				?>

	</section>
	<footer>

	</footer>
	<?php wp_footer() ?>
</body>
</html>