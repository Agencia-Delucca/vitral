<footer id="footer">
  <div class="links py-5">
    <div class="container-xxl">
      <div class="row gx-md-1 gx-lg-5">
        <div class="col-12 col-md-6 col-lg item">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-vitral-33-anos-horizontal.svg" alt="Logo Vitral" class="img-fluid" title="Ir para a página inicial">
          </a>
          <p class="text-primary mt-3 mb-0">
            Líder no segmento de esquadrias em alumínio, transformamos espaços com soluções inovadoras e personalizadas, valorizando cada detalhe para criar ambientes únicos e inspiradores.
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-2 item">
          <span class="title fw-bold text-uppercase">
            Mapa do site
          </span>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-rodape',
            'menu_class'     => 'footer-menu mt-3',
            'container'      => 'nav',
            'container_class' => 'footer-nav',
          ));
          ?>
        </div>

        <div class="col-12 col-md-6 col-lg item">
          <span class="title fw-bold text-uppercase">
            Central de atendimento
          </span>
          <div class="canais mt-3">
            <a href="https://api.whatsapp.com/send?phone=5517997680048&text=Olá, vim do site e gostaria de um orçamento" target="_blank" rel="noopener noreferrer" class="canais__wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/whats-icon.svg" alt="Logo do WhatsApp" class="img-fluid">
              <span>
                <b>Orçamentos:</b> (17) 99768.0048
              </span>
            </a>
            <p class="canais__wrapper mb-0">
              <a href="tel:+5517997577503" target="_blank" rel="noopener noreferrer" class="canais__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/tel-icon.svg" alt="Logo de telefone" class="img-fluid">
                <span>
                  <b>Atendimento:</b> (17) 99757.7503
                </span>
              </a>
            </p>
            <p class="canais__wrapper mb-0">
              <a href="mailto:vendas@vitralaluminioevidro.com.br" target="_blank" rel="noopener noreferrer" class="canais__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/mailto-icon.svg" alt="Logo de email" class="img-fluid">
                <span>
                  <b>E-mail:</b> vendas@vitralaluminioevidro.com.br
                </span>
              </a>
            </p>
            <p class="canais__wrapper mb-0">
              <a href="https://maps.app.goo.gl/NbXa9gUceUrkHFbV8" class="canais__wrapper" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/map-icon.svg" alt="Logo de mapa" class="img-fluid">
                <span>
                  <b>Endereço:</b> Rua Sete de Setembro, 164, Centro - Bebedouro/SP - CEP: 14700-405
                </span>
              </a>
            </p>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg item">
          <div class="sociais">
            <span class="title fw-bold text-uppercase">
              Siga nossas redes sociais
            </span>
            <div class="sociais__redes mt-3">
              <a href="https://www.facebook.com/vitralaluminioevidro/" target="_blank" rel="noopener noreferrer" title="Ir para o facebook">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/facebook-icon.svg" alt="Logo do Facebook" class="img-fluid">
              </a>
              <a href="https://www.instagram.com/vitralaluminioevidro/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/instagram-icon.svg" alt="Logo do Instagram" class="img-fluid" title="Ir para o instagram">
              </a>
              <a href="https://www.youtube.com/@vitralaluminioevidro" target="_blank" rel="noopener noreferrer" title="Ir para o YouTube">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/youtube-icon.svg" alt="Logo do YouTube" class="img-fluid">
              </a>
              <a href="https://br.linkedin.com/company/vitral-alum%C3%ADnio-e-vidros" target="_blank" rel="noopener noreferrer" title="Ir para o LinkedIn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/linkedin-icon.svg" alt="Logo do LinkedIn" class="img-fluid">
              </a>
              <a href="https://g.co/kgs/p1NcrnN" target="_blank" rel="noopener noreferrer" title="Ir para o Google Business">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/business-icon.svg" alt="Logo do Google Business" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">
    <div class="container-xxl">
      <div class="copy">
        Copyright 2025 &reg; Todos os direitos reservados. Vitral Alumínio e Vidro
      </div>
      <!-- <a href="https://www.agenciadelucca.com.br" target="_blank" rel="noopener noreferrer" class="copy-delucca" aria-label="Site da Agência Delucca" title="Ir para o site da Agência Delucca">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-delucca.svg" alt="Agência Delucca">
      </a> -->
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>