        </main>
				
	<footer>
			<section class="pre-footer">
				<div class="datos_lluna">

					<h3>Lluna</h3>
					<p>Calle Bajo, Valencia  46730</p>
					<p>66493843</p>
					<p>Todos los días 11:00-11:00</p>

				</div>

				<div class="logo_box">
				
					<a href="https://esatdev.com/2022/seokye/lluna/home/" alt="inicio de la web"><img class="footer__logo" src="<?php bloginfo ( 'template_url' ); ?>/img/Lluna-logo.png"  alt="Logotipo de Lluna"> </a>

				</div>

				<div>
					<?php bloginfo ( 'description' ); ?>
					<?php

						wp_nav_menu ( array
						(
							'theme_location' => 'footer-menu-left',
							'container' => false,
							'menu_class' => 'left'
						));	

						wp_nav_menu ( array
						(
							'theme_location' => 'footer-menu-right',
							'container' => false,
							'menu_class' => 'right'
						)); 
							
					?>
			</div>

		</section>

		<section class="redes_sociales_box">

			<div class="plataformas">
			
				<a href="https://justeat.es" alt="iniciar just eat"><img class="justeat" src="<?php bloginfo ( 'template_url' ); ?>/img/iconos/icons8-just-eat-96.png"   width= "70px" alt="Logotipo de justeat"> </a>

				<a href="https://globo.com" alt="iniciar globo"><img class="globo" src="<?php bloginfo ( 'template_url' ); ?>/img/iconos/globo.png"  width= "75px" alt="Logotipo de globo"> </a>

				<a href="https://whatsapp.com" alt="iniciar whatsapp"><img class="whatsapp" src="<?php bloginfo ( 'template_url' ); ?>/img/iconos/whatsapp-icon.png"  width= "50px" alt="Logotipo de whatsapp"> </a>
			
			</div>

			<div class="redes-sociales">

				<a href="https://facebook.com" alt="iniciar facebook"><img class="footer__logo" src="<?php bloginfo ( 'template_url' ); ?>/img/iconos/facebook.png" width= "45px" alt="Logotipo de facebook"> </a>

				<a href="https://instagram.com" alt="iniciar instagram"><img class="instagram" src="<?php bloginfo ( 'template_url' ); ?>/img/iconos/instagram.png"  width= "40px"alt="Logotipo de instagram"> </a>

				<a href="https://youtube.com" alt="iniciar youtube"><img class="youtube" src="<?php bloginfo ( 'template_url' ); ?>/img/iconos/youtube.png" width= "40px" alt="Logotipo de youtube"> </a>

				<a href="https://tiktok.com" alt="iniciar tiktok"><img class="tiktok" src="<?php bloginfo ( 'template_url' ); ?>/img/iconos/tiktok.png" width= "30px" alt="Logotipo de tiktok"> </a>

				<p>2023 by Seokye Lee</p>

			</div>

		</section>

    </footer>



		<?php wp_footer(); ?>

	</body>
    
    </html>
    