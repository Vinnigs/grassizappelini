<?php 
// Template Name: Contato

get_header();
?>

<!-- HEADER -->
<header class="pages">
    <div class="container">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-header-pages.svg" alt="" class="logo-min"></a>
        <nav>
            <ul>
                <li><a href="<?php echo get_site_url(); ?>">Início</a></li>
                <li><a href="<?php echo get_site_url(); ?>/empreendimentos">Empreendimentos</a></li>
                <li><a href="<?php echo get_site_url(); ?>/conheca-itapoa">Itapoá</a></li>
                <li><a href="<?php echo get_site_url(); ?>/sobre-nos">Sobre Nós</a></li>
                <li><a href="<?php echo get_site_url(); ?>/contato" class="contato">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>
    <!---->


    <!-- Seção CONTATO -->
    <section class="contato">

        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detail-bg.svg" alt="" class="detail-bg"> -->

        <div class="container">
            <h3>Entre em Contato</h3>
            <p class="subtitulo">Escolha a melhor forma para ser atendido</p>

            <div class="whatsapp-cont">
                <p class="titulo">WhatsApp</p>

                <div class="cont-cards">
                    <a href="https://wa.me/5547997529190" target="_blank" class="card">
                        <div class="dot-green"></div>
                        <p>(47) 99752-9190</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-whats.svg" alt="" class="arrow-whats">
                    </a>

                    <a href="https://wa.me/554734431549" target="_blank" class="card">
                        <div class="dot-green"></div>
                        <p>(47) 3443-1549</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-whats.svg" alt="" class="arrow-whats">
                    </a>
                </div>
            </div>

            <div class="formulario">
                <p class="titulo">Fale Conosco</p>

                <div class="input-field">
                    <?php echo do_shortcode('[contact-form-7 id="dc72441" title="Formulário Página Contato"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <!---->


    <!-- Seção CTA -->
    <section class="cta">
        <div class="container">
            <p class="titulo">Endereço</h3>
            <p>Avenida Beira Mar 3, nº1010 Balneário - Nossa Senhora Aparecida, Itapoá - SC, 89249-000</p>
            <a href="https://maps.app.goo.gl/B7ndVgvbDefStpoB8" target="_blank" class="btn-secondary"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-map.svg" alt="">Ver no mapa</a>
        </div>
    </section>
    <!---->

    <!-- FOOTER -->
    <footer class="pages">
        <div class="container">

            <div class="conteudo">
                <div class="menu sobre">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-gz-footer.svg" alt="" class="logo-gz">
                    <p class="historia">Com mais de uma década de atuação, nascemos de um sentimento de transformação e ... <span><a href="<?php echo get_site_url(); ?>/sobre-nos">Continuar lendo</a></span></p>
                </div>
    
                <div class="menu navegue">
                    <p class="titulo-footer">NAVEGUE</p>
                    <nav>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>">Início</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/sobre-nos">Sobre Nós</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
                        </ul>
                    </nav>
                </div>
    
                <div class="menu institucional" style="display: none;">
                    <p class="titulo-footer">INSTITUCIONAL</p>
                    <nav>
                        <ul>
                            <li><a href="">Política de Privacidade</a></li>
                            <li><a href="">Termos de Uso</a></li>
                        </ul>
                    </nav>
                </div>
    
                <div class="menu fale-conosco">
                    <p class="titulo-footer">FALE CONOSCO</p>
                    <ul>
                        <li><p>atendimento@grassizappelini.com.br</p></li>
                        <li><p>(47) 99752-9190 | (47) 3443-1549</p></li>
                        <li><p>Seg. a Sex. das 09h00 às 18h00</p></li>
                    </ul>
                </div>
            </div>
            
            <div class="creditos">
                <p>Grassi Zappelini, 2023 © Todos os direitos reservados.</p>
                <a href="#"><p>Voltar ao topo</p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt=""></a>
            </div>
        </div>
    </footer>

<?php get_footer(); ?>