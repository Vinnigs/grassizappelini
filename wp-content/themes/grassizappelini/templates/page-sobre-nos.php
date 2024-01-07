<?php
// Template Name: Sobre Nós

get_header();
?>

<header class="pages">
    <div class="container">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-header-pages.svg" alt="" class="logo-min"></a>
        <nav>
            <ul>
                <li><a href="<?php echo get_site_url(); ?>">Início</a></li>
                <li><a href="<?php echo get_site_url(); ?>/empreendimentos">Empreendimentos</a></li>
                <li><a href="<?php echo get_site_url(); ?>/conheca-itapoa">Itapoá</a></li>
                <li><a href="<?php echo get_site_url(); ?>/sobre-nos" class="active">Sobre Nós</a></li>
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
                <h3>Sobre Nós</h3>
                <p>Nossa História e Compromisso com a Excelência</p>
            </div>
        </div>
    </section>
    <!---->



    <!-- Seção NOSSA HISTÓRIA -->
    <section class="nossaHistoria">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detail-bg.svg" alt="" class="detail-bg">

        <div class="container">
            <div class="titulo">
                <p class="subtitulo">Grassi Zappelini</p>
                <h3>NOSSA HISTÓRIA</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/separador.svg" alt="" class="separador">
            </div>

            <div class="historia">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/office-gz.png" alt="" class="office">

                <div class="cont-cards">
                    <div class="card-num">
                        <p class="num"><span>+</span>100</p>
                        <p>Obras<br>Concluídas</p>
                    </div>
                    <div class="card-num">
                        <p class="num"><span>+</span>15</p>
                        <p>Torres<br>em Itapoá</p>
                    </div>
                </div>

                <p>
                    Com mais de uma década de atuação, nascemos de um sentimento de transformação e da clara e ousada visão de que Itapoá seria um celeiro de inovação e sofisticação na construção civil. 
                    Entendemos que inovar o mercado imobiliário de Itapoá é a consequência de um chamado, de um propósito. É o efeito colateral de construir sonhos, superando limites. 
                    Nosso longo caminho foi pavimentado por valores reais, de excelência, criatividade e amor pelo nosso lar. 
                    <br><br>
                    Acreditamos que somente quem tem coragem para romper barreiras, constrói um futuro diferente. Por isso, a cada novo projeto, enxergamos a possibilidade de fazer algo ainda maior, melhor e mais inovador. Pois superar é a única forma de gerar evolução.
                    A cidade é o alicerce de nossas raízes, o berço de novas ideias e o componente de nossas alianças.
                
                </p>
                

                <p>
                    Essa é a GZ. <br>
                    Ideias mais inovadoras. <br>
                    Projetos mais sustentáveis. <br>
                    Motivações mais humanas. <br>

                    GZ Empreendimentos Sustentáveis

                </p>
                
                
            </div>
        </div>

        <!-- Seção VALORES -->
        <section class="valores">
            <div class="container">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-missao.svg" alt="">
                    <p class="titulo">Missão</p>
                    <p class="descricao">Promover a evolução no mercado imobiliário, através de ações audaciosas e disruptivas</p>
                </div>

                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-visao.svg" alt="">
                    <p class="titulo">Visão</p>
                    <p class="descricao">Liderar o mercado imobiliário itapoaense, com ações ousadas que gerem desenvolvimento para o município</p>
                </div>

                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-valores.svg" alt="">
                    <p class="titulo">Valores</p>
                    <p class="descricao">Agir com fidelidade a qualidade, ao processo, ao produto e ao cliente.</p>
                </div>
            </div>
        </section>
        <!---->
    </section>
    <!---->



    



    <!-- Seção CTA -->
    <section class="cta">
        <div class="container">
            <h3 class="titulo">Fale com um corretor especialista</h3>
            <p>Descubra as melhores opções para seus investimentos com nossos corretores experientes.</p>
            <a href="https://wa.me/5547997529190" target="_blank" class="btn-cta">Fale Conosco</a>
        </div>
    </section>
    <!---->



    <!-- FOOTER -->
    <footer class="pages">
        <div class="container">

            <div class="conteudo">
                <div class="menu sobre">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-gz-footer.svg" alt="" class="logo-gz">
                    <p class="historia">Com mais de uma década de atuação, nascemos de um sentimento de transformação e... <span><a href="<?php echo get_site_url(); ?>/sobre-nos">Continuar lendo</a></span></p>
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
    <!---->

<?php get_footer(); ?>