<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Aztec
 * @since 0.1.0
 * @version 0.1.0
 */

get_header(); ?>

<div class="page">
	<div class="site-branding">
		<a href="<?php echo esc_url( home_url( '/' ) ) ?>">
			<img class="site-branding--image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/agenda30.jpg' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) )?>">
		</a>
	</div>

	<div class="site-header container">
		<div class="site-header--text">
			<span class="double-line">
				<span class="double-line--part double-line--part__first double-line--part__left">Universalmente</span>
				<span class="double-line--part double-line--part__last double-line--part__left">necessária,</span> 
			</span>
			
			<span class="double-line">
				<span class="double-line--part double-line--part__first">Nacionalmente</span>
				<span class="double-line--part double-line--part__last">urgente,</span> 
			</span>
			
			<span class="double-line">
				<span class="double-line--part double-line--part__first double-line--part__right">localmente</span>
				<span class="double-line--part double-line--part__last double-line--part__right">aderente.</span> 
			</span>
		</div>
		
		<img class="site-header--image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/guri.jpg' ); ?>" alt="Guri">
	</div>
	
	<div class="pq content-section">
		<div class="container">
			<div class="pq--title">Pq?</div>
			
			<div class="content-section--text pq--text">
				<p>	
				Nam risus ex, congue non dolor egestas, porta maximus metus. Praesent vestibulum tortor ut urna ullamcorper, at consectetur mauris laoreet. Integer sed blandit est. Mauris vestibulum nisi pretium est bibendum, vel dapibus metus condimentum. Fusce nec lectus leo. Etiam lobortis ipsum ligula, ac sagittis turpis rutrum vitae. Nullam efficitur vitae lacus non vulputate.
				</p>
				<p>
				Vestibulum laoreet faucibus orci, id rhoncus justo efficitur sed. Aenean non viverra lectus. Suspendisse imperdiet sit amet lacus vel consectetur. In nulla elit, ultricies sit amet eros vitae, consectetur sagittis risus. Vivamus in nisi nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec ac ipsum eget tellus gravida tempor in ut orci. Phasellus et ligula vitae magna rutrum suscipit. Praesent eget consequat diam. Proin convallis, orci nec bibendum eleifend, nulla risus fringilla ipsum, accumsan elementum quam turpis mattis lectus. Fusce eleifend odio sit amet quam consequat scelerisque.
				</p>
				<p>
				Vestibulum felis sem, pulvinar eget magna in, fermentum tempor turpis. Ut eu orci ut ligula convallis facilisis feugiat non dui. Suspendisse potenti. Fusce fermentum fermentum consectetur. Ut aliquam eleifend mauris sit amet pellentesque. Fusce ut varius ante. Maecenas ac consequat eros. Quisque et risus quis ex imperdiet porttitor ut vitae diam. Donec efficitur velit eget tempor molestie. Curabitur efficitur efficitur ligula varius dignissim. Sed lobortis nibh nec mi porttitor, ut imperdiet dui hendrerit.
				</p>
			</div>
		</div>
	</div>
	
	<div class="build-world image-section--wrapper">
		<div class="image-section">
			<div class="image-section--text container">
				Que mundo estamos comprometidos a construir?
			</div>
		</div>
	</div>
	
	<div class="themes content-section">
		<div class="container">
			<span class="themes--title double-line double-line__big">
				<span class="double-line--part double-line--part__first double-line--part__white">Nossos</span>
				<span class="double-line--part double-line--part__last">temas</span> 
			</span>
			
			<ol class="content-section--text themes--list">
				<li>O mundo tem jeito?</li>
				<li>Viver melhor a vida, com o que podemos sonhar?</li>
				<li>Ética e participação, quais as saídas?</li>
				<li>Nosso país pode ter paz?</li>
				<li>Economia sustentável e includente.</li>
				<li>Há salvação fora da inovação</li>
			</ol>
		</div>
	</div>
	
	<div class="get-involved image-section--wrapper">
		<div class="image-section">
			<div class="image-section--text container">
				Criticar é muito pouco. Envolva-se
			</div>
		</div>
	</div>
	
	<div class="pulse content-section">
		<div class="container">
			<span class="double-line double-line double-line__big">
				<span class="double-line--part double-line--part__first double-line--part__white">A agenda</span>
				<span class="double-line--part double-line--part__last double-line--part__blue">Pulsando</span> 
			</span>
			
			<div class="content-section--icons">
				<span class="i-slack content-section--icons--icon"></span>
				<span class="i-wordpress content-section--icons--icon"></span>
			</div>
			
			<div class="content-section--text content-section--text__small">
				Sed at tortor vitae sem placerat pretium. Duis vehicula euismod ante in ornare. Proin ac sem pulvinar, placerat ante eu, varius nibh. In hac habitasse platea dictumst. 
			</div>
		</div>
	</div>
	
	<div class="contact content-section">
		<div class="container">
			<span class="double-line double-line__big">
				<span class="double-line--part double-line--part__first double-line--part__white">Nossos</span>
				<span class="double-line--part double-line--part__last double-line--part__orange">pontos</span>
				<span class="double-line--part double-line--part__last double-line--part__orange">de contato</span>
			</span>
			
			<div class="content-section--icons">
				<span class="i-instagram content-section--icons--icon content-section--icons--icon__small"></span>
				<span class="i-facebook content-section--icons--icon content-section--icons--icon__small"></span>
				<span class="i-twitter content-section--icons--icon content-section--icons--icon__small"></span>
			</div>
			
			<div class="content-section--text content-section--text__small">
				Sed at tortor vitae sem placerat pretium. Duis vehicula euismod ante in ornare. Proin ac sem pulvinar, placerat ante eu, varius nibh. In hac habitasse platea dictumst. 
			</div>
		</div>
	</div>

	<div class="newsletter">
		<div class="container">
			<h2 class="newsletter--title">Envolva-se</h2>
			
			<form class="newsletter--form" action="#" method="POST">
				<input type="text" placeholder="receba a nossa newsletter" />
			</form>
			
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ) ?>">
					<img class="site-branding--image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/agenda30-branco.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) )?>">
				</a>
				<a href="https://aztecweb.net" title="Feito com &#9829; por Aztec - Especialista WordPress">
					<img class="aztec" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/aztec.png' ); ?>" alt="Aztec - Especialista WordPress">
				</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
