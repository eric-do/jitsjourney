<?php
/**
 *Template Name: Leaderboard
 *
 * @package OnePress
 */

get_header(); ?>

	<div id="content" class="site-content">

		<div class="page-header">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>

        <?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container no-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>
						<?php
							global $wpdb;
							$users = $wpdb->get_results("SELECT * FROM users;");
							echo "<table>";
							foreach($users as $user){
								echo "<tr>";
								echo "<td><img style='max-width:100px;'' src='".$user->belt."'></td>";
								echo "<td>".$user->name."</td>";
								echo "<td>".$user->score."</td>";
								echo "</tr>";
							}
							echo "</table>";
						?>
						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
