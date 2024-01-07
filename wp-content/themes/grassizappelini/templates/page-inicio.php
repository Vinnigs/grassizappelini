<?php
// Template Name: Inicio

get_header();
?>


<div class="popup" id="popup-1">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-butto" id="close-btn-1">&times;</div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/empree01.webp" alt="">
        <p>Pura vida. A expressão mais usada pelos costarriquenhos conecta a essência da vida às belezas profundas e simples do existir, do sentir, do ser; Somos o que vemos e o que vemos é o futuro, aqui e agora.
            Costa Rica é a união tropical da pura vida com o absoluto refino. Uma das expressões mais ousadas que Itapoá já viu. A elevação para um novo padrão de sofisticação, de exclusividade e requinte à beira mar
        </p>
        <a href="https://api.whatsapp.com/send/?phone=&text=Ol%C3%A1%2C+gostaria+de+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0">CHAME NO WHATSAPP</a>
    </div>
</div>


<div class="popup" id="popup-2">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-butto" id="close-btn-2">&times;</div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/PerspectivaB.webp" alt="">
        <p>Há milhares de anos, grandes filósofos gregos utilizaram o termo harmonia para representar a ordem e o equilíbrio do cosmos, através dos finos sons emitidos pelos movimentos dos planetas, o que refletia a perfeição do universo.
            Os conceitos foram se transformando ao longo dos séculos, mas sempre, em todo tempo e espaço, a harmonia foi o elemento responsável por unir diferentes sons e contextos, gerando algo novo, melhor e perfeito.
            O Harmonie Residence alcança as montanhas, cobre o cinza e toca o mar, criando a harmonia perfeita entre horizontes, paisagens e inovação. São 12 andares de torre, construídos com um olhar moderno e de alto padrão.
            O equilíbrio perfeito no topo mais alto.
        </p>
        <a href="https://api.whatsapp.com/send/?phone=&text=Ol%C3%A1%2C+gostaria+de+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0">CHAME NO WHATSAPP</a>
    </div>
</div>

<div class="popup" id="popup-3">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-butto" id="close-btn-3">&times;</div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/empree03.webp" alt="">
        <p> Mahalo é um termo sagrado para os havaianos que expressa a mais sincera gratidão. 
            Mahalo Beach Front é nosso mais novo lançamento e eleva o conceito de leveza e paz, unindo todo luxo. Com uma fachada espelhada e apartamento de luxo, Mahalo é um grande destaque à beira mar de Itapoá. 
        </p>
        <a href="https://api.whatsapp.com/send/?phone=&text=Ol%C3%A1%2C+gostaria+de+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0">CHAME NO WHATSAPP</a>
    </div>
</div>



<!-- HEADER -->
<header class="home">
    <div class="container">

        <div class="logo-header">
            <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Icone-01.svg" alt=""></a>
        </div>
        
        <!-- MENU NAVEGAÇÃO -->
        <nav class="menu-nav">
            
            <ul class="nav-list">
                <li><a class="active" href="<?php echo get_site_url(); ?>">Início</a></li>
                <li><a href="<?php echo get_site_url(); ?>/empreendimentos">Empreendimentos</a></li>
                <li><a href="<?php echo get_site_url(); ?>/conheca-itapoa">Itapoá</a></li>
                <li><a href="<?php echo get_site_url(); ?>/sobre-nos">Sobre nós</a></li>
                <li><a class="button" href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
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


    <!-- SECTION HERO -->
    <section id="hero">
        <!-- IMAGEM DE FUNDO -->
        <img class="img-fundo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle-99.png" alt="">

        <div class="container"> 
            <div class="main">

                <div class="cont-left">
                    <img class="logo-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-02.svg" alt="">
                    <h1> <span class="destaque"> O MAIOR ÍCONE </span><br>  DE ITAPOÁ</h1>
                    
                    <div class="cont-button">
                        <a href="<?php echo get_site_url(); ?>/icon-residence" class="cta">SAIBA MAIS</a>

                        <a href="<?php echo get_site_url(); ?>/icon-residence" class="cont-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector-01.svg" alt="">
                            <p>Assista ao trailer</p>
                        </a>
                    </div>

                </div>


                <div class="cont-right">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">

                                <img class="card-slider" src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/ICON.webp" alt="">
                                <div class="cont-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon1.svg" alt="">
                                    <p>17 Andares</p>
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <img class="card-slider" src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Piscina_B.webp" alt="">
                                <div class="cont-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon6.svg" alt="">
                                    <p>Piscina com borda infinita</p>
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <img class="card-slider" src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Estar_B.webp" alt="">
                                <div class="cont-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon12.svg" alt="">
                                    <p>Vista Mar</p>
                                </div>

                            </div>
                            
                            <div class="swiper-slide">

                                <img class="card-slider" src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/AP_Garden03.webp" alt="">
                                <div class="cont-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon6.svg" alt="">
                                    <p>Piscina privativa</p>
                                </div>

                            </div>
                            
                            <div class="swiper-slide">

                                <img class="card-slider" src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Quiosque_A.webp" alt="">
                                <div class="cont-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon5.svg" alt="">
                                    <p>Quiosques</p>
                                </div>

                            </div>
                            
                            <div class="swiper-slide">

                                <img class="card-slider" src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/AP-Fundos-A.webp" alt="">
                                <div class="cont-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon3.svg" alt="">
                                    <p>3 Suítes</p>
                                </div>

                            </div>
                            
                            <div class="swiper-slide">

                                <img class="card-slider" src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Estar_A.webp" alt="">
                                <div class="cont-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon8.svg" alt="">
                                    <p>2 Vagas de garagem</p>
                                </div>

                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION LANÇAMENTOS -->
    <section id="lancamentos">
        <div class="container">

            <div class="cont-top">
                <p class="destaque">Lançamentos</p>
                <h3>EMPREENDIMENTOS</h3>
                <img class="img-details" src="<?php echo get_template_directory_uri(); ?>/assets/img/Group-01.svg" alt="">
            </div>

            <!-- CARDS EMPREENDIMENTOS -->
            <div class="cont-bottom">
                
                <div class="card">
                    <img class="img-principal" src="<?php echo get_template_directory_uri(); ?>/assets/img/empree01.webp" alt="">

                    <div class="details">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Group-02.svg" alt=""> -->
                        <p style = "color: white;">Costa Rica</p>
                        <img class="wrap" src="<?php echo get_template_directory_uri(); ?>/assets/img/Polygon-01.svg" alt="">
                    </div>

                    <div class="cont-txt">
                        <p>O empreendimento mais luxuoso de Itapoá. Sofisticação, exclusividade e beleza tropical.</p>
                        

                        <a id="butt-popup-1" href="<?php echo get_site_url(); ?>/empreendimentos">SAIBA MAIS</a>
                    </div>
                </div>
                
                <div class="card">
                    <img class="img-principal" src="<?php echo get_template_directory_uri(); ?>/assets/img/PerspectivaB.webp" alt="">

                    <div class="details">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Group-02.svg" alt=""> -->
                        <p style = "color: white;">Harmonie Residence</p>
                        <img class="wrap" src="<?php echo get_template_directory_uri(); ?>/assets/img/Polygon-01.svg" alt="">
                    </div>

                    <div class="cont-txt">
                        <p>O equilíbrio, a audácia, o atrevimento, a harmonia. O equilíbrio perfeito no topo mais alto.</p>
                        
                       
                        <a id="butt-popup-2" href="<?php echo get_site_url(); ?>/empreendimentos">SAIBA MAIS</a>
                    </div>
                </div>

                <div class="card">
                    <img class="img-principal" src="<?php echo get_template_directory_uri(); ?>/assets/img/empree03.webp" alt="">

                    <div class="details">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Group-02.svg" alt=""> -->
                        <p style = "color: white;">Mahalo Beach Front</p>
                        <img class="wrap" src="<?php echo get_template_directory_uri(); ?>/assets/img/Polygon-01.svg" alt="">
                    </div>

                    <div class="cont-txt">
                        <p>Onde a leveza e a paz encontram o luxo à beira mar.</p>

                        

                        <a id="butt-popup-3" href="<?php echo get_site_url(); ?>/empreendimentos">SAIBA MAIS</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- SECTION EMPREENDIMENTOS -->
    <section id="empreendimentos">

        <div class="container">
            

            <!-- SLIDER DE INFO -->
            <div class="cont-right">
                <div class="swiper empreeSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- IMAGEM DE FUNDO -->
                            <img class="fundo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle-04.png" alt="">

                            <div class="conteudo-slide">
                                <div class="cont-txt">
                                    <p class="color">Empreendimento</p>
                                    <p class="destaque">ICON</p>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>

                                <div class="details"></div>

                                <div class="cont-bottom">
                                    <p class="txt">O maior ícone de Itapoá, com 17 andares e 59 apartamentos de alto padrão. Plantas que variam de 130 a 460 m2, com muito sofisticação e inovação.</p>
                                    <div class="cont-icons">

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/predio-icon.svg" alt="">
                                            <p>Centro</p>
                                        </div>

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector-03.svg" alt="">
                                            <p>Até 3 vagas de garagem</p>
                                        </div>

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector-02.svg" alt="">
                                            <p>3 suítes</p>
                                        </div>

                                        
                                    </div>
                                    <a class="button" href="https://wa.me/5547997529190" target="_blank">FALE COM UM DE NOSSOS CORRETORES</a>
                                    
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide">

                            <!-- IMAGEM DE FUNDO -->
                            <img class="fundo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle-04.png" alt="">

                            <div class="conteudo-slide">
                                <div class="cont-txt">
                                    <p class="color">Empreendimento</p>
                                    <p class="destaque">ICON</p>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>

                                <div class="details"></div>

                                <div class="cont-bottom">
                                    <p class="txt">O maior ícone de Itapoá, com 17 andares e 59 apartamentos de alto padrão. Plantas que variam de 130 a 460 m2, com muito sofisticação e inovação.</p>
                                    <div class="cont-icons">

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/predio-icon.svg" alt="">
                                            <p>Centro</p>
                                        </div>

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector-03.svg" alt="">
                                            <p>Até 3 vagas de garagem</p>
                                        </div>

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector-02.svg" alt="">
                                            <p>3 suítes</p>
                                        </div>

                                        
                                    </div>
                                    <a class="button" href="">FALE COM UM DE NOSSOS CORRETORES</a>
                                    
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide">

                            <!-- IMAGEM DE FUNDO -->
                            <img class="fundo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle-04.png" alt="">

                            <div class="conteudo-slide">
                                <div class="cont-txt">
                                    <p class="color">Empreendimento</p>
                                    <p class="destaque">ICON</p>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>

                                <div class="details"></div>

                                <div class="cont-bottom">
                                    <p class="txt">O maior ícone de Itapoá, com 17 andares e 59 apartamentos de alto padrão. Plantas que variam de 130 a 460 m2, com muito sofisticação e inovação.</p>
                                    <div class="cont-icons">

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/predio-icon.svg" alt="">
                                            <p>Centro</p>
                                        </div>

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector-03.svg" alt="">
                                            <p>Até 3 vagas de garagem</p>
                                        </div>

                                        <div class="cont-wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector-02.svg" alt="">
                                            <p>3 suítes</p>
                                        </div>

                                        
                                    </div>
                                    <a class="button" href="">FALE COM UM DE NOSSOS CORRETORES</a>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </section>


    <!-- SECTION NOSSA HISTÓRIA -->
    <section id="historia">

        <div class="container">
            <div class="logo-txt">
                <img class="img-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Camada-01.svg" alt="">
                <p class="destaque">NOSSA HISTÓRIA</p>
                <p class="color">Com mais de uma década de atuação, nascemos de um sentimento de transformação e da clara e ousada visão de que Itapoá seria um celeiro de inovação e sofisticação na construção civil. 
                    Entendemos que inovar o mercado imobiliário de Itapoá é a consequência de um chamado, de um propósito. É o efeito colateral de construir sonhos, superando limites. 
                </p>
            </div>
            
            <div class="mais-cem">

                    <div class="card-num">
                        <p class="num"><span>+</span>100</p>
                        <p>Obras<br>Concluídas</p>
                    </div>
                    
                    <div class="card-num">
                        <p class="num"><span>+</span>15</p>
                        <p>Torres<br>em Itapoá</p>
                    </div>

            </div>
           

            <div class="cont-video">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/office-gz.png" alt="">
            </div>
        </div>

    </section>

    <!-- SECTION CONHEÇA ITAPOÁ -->
    <section id="conheca">
        <div class="container">

            <div class="cont-left">
                <p class="destaque">Boa de viver, boa de investir</p>
                <h3>Conheça itapoá</h3>
                <p class="color">Itapoá é uma das cidades que mais crescem no Brasil, tornando-se um lugar ideal para você aproveitar os bons momentos com aqueles que você ama.</p>
                
                <a class="saiba-mais" href="<?php echo get_site_url(); ?>/conheca-itapoa" >SAIBA MAIS</a>
            </div>

            <!-- CARDS -->
            <div class="cont-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-bs4.webp" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-tp.webp" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-bs.webp" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-tp7.webp" alt="">
            </div>
        </div>
    </section>

    <!-- SECTION CALL TO ACTION -->
    <section id="cta">
        <div class="container">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Camada-03.png" alt="">
            <h3 class="titulo">Fale com um corretor especialista</h3>
            <p>Descubra as melhores opções para seus investimentos com nossos corretores experientes.</p>
            <a href="https://wa.me/554797529190" target="_blank" class="btn-cta">Fale Conosco</a>
           
        </div>

        </div>

    </section>

    <!-- SECTION REDES SOCIAIS -->
    <section id="redes-sociais">
        <div class="container">
            <div class="cont-left">
                <p class="destaque">Siga-nos</p>
                <p class="color">Acompanhe nossas <br> redes sociais </p>
                <div class="redes">
                    <a href="https://www.instagram.com/grassizappelini/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Group-68.svg" alt=""></a>
                    <a href="https://www.facebook.com/grassizappelini/?locale=pt_BR" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Group-69.svg" alt=""></a>
                </div>

            </div>

            <div class="cont-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle-55.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle-56.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle-57.png" alt="">
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