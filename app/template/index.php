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
				No mundo, sonho e distopia andam lado a lado. Avanços tecnológicos revolucionários expandem a vida ao erradicar doenças até aqui incuráveis e projetam um futuro de abundância e oportunidades. 
				</p>
				<p>
				Ao mesmo tempo, observamos o renascimento da intolerância mais primitiva, a mesma que, há apenas 70 anos, levou a humanidade a temer por seu destino.
				</p>
				<p>
				No Brasil temos uma população aberta a inovações, ambiciosa, empreendedora e festiva. Já o sistema político, quando não está alheio, tem sido diretamente responsável pelas imensas frustrações da sociedade. Entre os dois há um fosso intransponível, preenchido por ressonante desesperança.
				</p>
				<p>
				Alheias a esse sentimento, as visões mais rasas, os sentimentos mais regressistas e os grupos de interesse mais mesquinhos, apropriaram-se do espaço público. Na paisagem política, à esquerda ou à direita, nada autoriza a pensar que estamos lançando as bases para a construção de uma grande nação.
				</p>
				<p>
				As propostas para a descontinuidade do modelo atual são localizadas e insuficientes. Pouco se tem discutido sobre uma visão autônoma e ambiciosa para ressignificar o papel do Brasil no mundo, como outros emergentes estão fazendo com determinação.
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
				<li>Viver melhor a vida. Com o que podemos sonhar?</li>
				<li>Ética e participação. Quais as saídas?</li>
				<li>Nosso país pode ter paz?</li>
				<li>Economia sustentável e includente.</li>
				<li>Há salvação fora da inovação?</li>
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
	
	<?php /*
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
				Engaje-se nas nossas discussões através do Slack e conheça nossas reflexões e pensamentos através da nossa produção no Medium.
			</div>
		</div>
	</div>
	*/ ?>
	
	<div class="contact content-section">
		<div class="container">
			<span class="double-line double-line__big">
				<span class="double-line--part double-line--part__first double-line--part__white">Nossos</span>
				<span class="double-line--part double-line--part__last double-line--part__orange">pontos</span>
				<span class="double-line--part double-line--part__last double-line--part__orange">de contato</span>
			</span>
			
			<div class="content-section--icons">
				<a class="i-instagram content-section--icons--icon content-section--icons--icon__small" href="https://www.instagram.com/Agenda3.0/" target="_blank">
					Instagram
				</a>
				<a class="i-facebook content-section--icons--icon content-section--icons--icon__small" href="https://www.facebook.com/agenda3.0/" target="_blank">
					Facebook
				</a>
				<a class="i-twitter content-section--icons--icon content-section--icons--icon__small" href="https://twitter.com/Agenda_30/" target="_blank">
					Twitter
				</a>
				<a class="i-soundcloud content-section--icons--icon content-section--icons--icon__small" href="https://soundcloud.com/agenda30/" target="_blank">
					SoundCloud
				</a>
				<a class="i-youtube content-section--icons--icon content-section--icons--icon__small" href="https://soundcloud.com/agenda30/" target="_blank">
					YouTube
				</a>
			</div>
			
			<div class="content-section--text content-section--text__small">
				<p>
				Acompanhe e se junte a nós nas nossas redes sociais e compartilhe das nossas ideias.
				</p>
				<p>
				Você é muito bem-vindo.
				</p>
			</div>
		</div>
	</div>

	<div class="newsletter">
		<div class="container">
			<?php /*
			<h2 class="newsletter--title">Envolva-se</h2>
			
			<form class="newsletter--form" action="#" method="POST">
				<input type="text" placeholder="receba a nossa newsletter" />
			</form>
			*/ ?>
			
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ) ?>">
					<img class="site-branding--image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/agenda30-branco.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) )?>">
				</a>
			</div>
			<div class="brands">
				<a href="https://www.conchworks.com/" title="Design por Counch Works">
					<img class="brands--image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/conch-works.png' ); ?>" alt="Conch Works">
				</a>
				<a href="https://aztecweb.net" title="Desenvolvimento por Aztec - Especialista WordPress">
					<img class="brands--image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/aztec.png' ); ?>" alt="Aztec">
				</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
