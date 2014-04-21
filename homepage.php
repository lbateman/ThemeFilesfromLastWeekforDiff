<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- Main content -->
		<section class="main-content">
			<?php 
				$posts = get_posts(array(
					'numberposts' => -1,
					'post_type' => 'show_post',
				));

				if($posts)
				{
					echo '<ul>';
				 
					foreach($posts as $post)
					{
						echo '<a href="' . get_permalink($post->ID) . '">' . get_the_post_thumbnail($post->ID) . '</a>';
						echo '<a href="' . get_permalink($post->ID) . '">' . get_field('show_status') . '</a>';
						echo '<li><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></li>';
						echo '<a href="' . get_permalink($post->ID) . '">' . "Performances:" . '</a>' . "&nbsp;" . get_field('performance_dates');
						echo get_field('description_of_show');
					}
				 
					echo '</ul>';
				}
				 
			?>
		</section> <!-- .main-content -->	
			
			<!-- Sidebar (right column) -->
			<section class="custom-sidebar">
				<section class="sidebar-icons clear">
					<section class="social-media">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/facebook.png" alt="Facebook icon">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/twitter.png" alt="Twitter icon">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/youtube.png" alt="YouTube icon">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/googleplus.png" alt="Google+ icon">
					</section>
					<section class="awards">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/phoenix-best2010-ribbon.png" alt="Boston Phoenix Best of 2010 ribbon icon">
					</section>
				</section>
				
				<section class="sidebar-buttons clear">
					<button type="button">Buy Tickets</button>
					<button type="button">Subscribe</button>
					<button type="button">Donate</button>
				</section>
				
				<section class="about-us">
					<h1>About Us</h1>
					<p>Theatre@First is an all-volunteer community theatre based in Somerville, MA. Founded in 2003, we fill a vital niche in the vibrant Davis Square arts scene. We draw upon the talents and support of individuals and organizations throughout the community to provide opportunities for our participants and audiences to experience quality live theatre in a variety of local venues. For more about our recent history, see our In the Press page.</p>
				</section>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
