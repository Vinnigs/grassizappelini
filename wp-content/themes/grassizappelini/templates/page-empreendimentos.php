<?php

// Template Name: Empreendimentos
get_header();
?>

    <!-- HEADER -->
    <header class="pages">
        <div class="container">
            <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-header-pages.svg" alt="" class="logo-min"></a>
            <!-- MENU NAVEGAÇÃO -->
            <nav class="menu-nav">
                <ul class="nav-list">
                    <li><a href="<?php echo get_site_url(); ?>">Início</a></li>
                    <li><a class="active" href="<?php echo get_site_url(); ?>/empreendimentos">Empreendimentos</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/conheca-itapoa">Itapoá</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/sobre-nos">Sobre nós</a></li>
                    <li><a class="contato" href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
                </ul>
            </nav>

            <nav class="menu-nav-mobile">
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>

                <ul class="nav-list-mobile">
                <li><a class="active" href="<?php echo get_site_url(); ?>">Início</a></li>
                    <li><a href="<?php echo get_site_url(); ?>">Empreendimentos</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/conheca-itapoa">Itapoá</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/sobre-nos">Sobre Nós</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/contato" class="contato">Contato</a></li>
                </ul>
                
            </nav>
        </div>
    </header>
    <!---->

    <!-- Seção BANNER -->
    <section class="banner">
        <div class="container">
            <div class="text">
                <h3>Empreendimentos</h3>
            </div>
        </div>
    </section>
    <!---->

    <section class="empreendimentos">
        <div class="container">
            <div class="card-empreend"> <!-- Empreendimento Icon Residence -->
                <div class="img-cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle-04.png">
                </div>
                <div class="conteudo">
                    <h3>Icon Residence</h3>
                    <p>Ícone é um elemento que transcende o tempo, um marco que supera os limites do imaginário através de uma visão inovadora e transformadora. Seu legado Inspira, gera Confiança, Ousadia e cria algo Novo, disruptivo o suficiente para mudar horizontes. Esses é o Icon Residence, o maior e mais impactante edificífio de Itapoá. Um novo tempo nasce agora.</p>
                    <a href="<?php echo get_site_url(); ?>/icon-residence" class="btn-card icon">Saiba mais</a>
                </div>
            </div>

            <div class="card-empreend"> <!-- Empreendimento Costa Rica -->
                <div class="img-cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/empree01.webp">
                </div>
                <div class="conteudo">
                    <h3>Costa Rica</h3>
                    <p>Pura vida. A expressão mais usada pelos costarriquenhos conecta a essência da vida às belezas profundas e simples do existir, do sentir, do ser; Somos o que vemos e o que vemos é o futuro, aqui e agora. Costa Rica é a união tropical da pura vida com o absoluto refino. Uma das expressões mais ousadas que Itapoá já viu. A elevação para um novo padrão de sofisticação, de exclusividade e requinte à beira mar</p>
                    <a href="https://wa.me/5547997529190" class="btn-card">Chame no WhatsApp</a>
                </div>
            </div>

            <div class="card-empreend"> <!-- Empreendimento Harmonie Residence -->
                <div class="img-cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/PerspectivaB.webp">
                </div>
                <div class="conteudo">
                    <h3>Harmonie Residence</h3>
                    <p>Há milhares de anos, grandes filósofos gregos utilizaram o termo harmonia para representar a ordem e o equilíbrio do cosmos, através dos finos sons emitidos pelos movimentos dos planetas, o que refletia a perfeição do universo. Os conceitos foram se transformando ao longo dos séculos, mas sempre, em todo tempo e espaço, a harmonia foi o elemento responsável por unir diferentes sons e contextos, gerando algo novo, melhor e perfeito. O Harmonie Residence alcança as montanhas, cobre o cinza e toca o mar, criando a harmonia perfeita entre horizontes, paisagens e inovação. São 12 andares de torre, construídos com um olhar moderno e de alto padrão. O equilíbrio perfeito no topo mais alto.</p>
                    <a href="https://wa.me/5547997529190" class="btn-card">Chame no WhatsApp</a>
                </div>
            </div>

            <div class="card-empreend"> <!-- Empreendimento Mahalo Beach Front -->
                <div class="img-cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/empree03.webp">
                </div>
                <div class="conteudo">
                    <h3>Mahalo Beach Front</h3>
                    <p>Mahalo é um termo sagrado para os havaianos que expressa a mais sincera gratidão. Mahalo Beach Front é nosso mais novo lançamento e eleva o conceito de leveza e paz, unindo todo luxo. Com uma fachada espelhada e apartamento de luxo, Mahalo é um grande destaque à beira mar de Itapoá.</p>
                    <a href="https://wa.me/5547997529190" class="btn-card">Chame no WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
    
    

    <!-- FOOTER -->
    <footer class="footer-home">
        <div class="container">

            <div class="conteudo">
                <div class="menu sobre">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-gz-white.svg" alt="" class="logo-gz">
                    <p class="historia">Com mais de uma década de atuação, nascemos de um sentimento de transformação e... <span><a href="<?php echo get_site_url(); ?>/sobre-nos">Continuar lendo</a></span></p>
                </div>
    
                <div class="menu navegue">
                    <p class="titulo-footer">NAVEGUE</p>
                    <nav>
                        <ul>
                            <li><a href="#">Início</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/sobre-nos/">Sobre Nós</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/contato/">Contato</a></li>
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
                <a href="#" id="voltarTopo"><p>Voltar ao topo</p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt=""></a>
            </div>
        </div>
    </footer>
    <!---->

<?php get_footer(); ?>