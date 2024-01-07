<?php

// Template Name: LP Icon

get_header();

?>

 
 
 <!-- Contato Fixed -->
 <div class="contato-follow">
        <p class="titulo">Entre em contato</p>
        <a href="https://wa.me/554797529190" target="_blank" class="telefone">
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lp-icon/WhatsApp.svg" style="width:24px" alt="">
            <p>WhatsApp</p>
        </a>
        <a class="modal-trigger email">
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lp-icon/email-icon.svg" alt="">
            <p>Mensagem</p>
        </a>
    </div>
    <!---->

    <!-- Modal Structure -->
    <div class="bg-modal"></div>
    <div class="modal">
        <div class="modal-conteudo">
            <h4>Entre em contato</h4>

            <?php echo do_shortcode('[contact-form-7 id="5e8d632" title="Formulário LP Icon"]'); ?>

            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lp-icon/close-btn.svg" class="close-modal">
        </div>
    </div>
    <!---->

    <section id="hero">

        <div class="cont-left">
            <img src=" <?php echo get_template_directory_uri();?>/assets/img/lp-icon/TORRE_HERO.webp" alt="">
        </div>

        <div class="cont-right">
            <div class="logo-cont">
                <div class="icon-logo">
                    <p></p>
                    <!-- <p class="destaque">Empreendimento</p> -->
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/lp-icon/logo-header.svg" alt="">
                </div>
                <!--<img src="<?php //echo get_template_directory_uri();?>/assets/img/logo-gz-mini.svg" class="gz-logo">-->
            </div>
            

            <div class="separador"></div>

            <div class="container-info">

                <a class="saiba-mais" href="https://wa.me/554797529190" target="_blank">
                    <p>Saiba mais</p>
                    <img src="  <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Vector-hero.svg" alt="">
                </a>      
                
            </div>
        </div>
    </section>

    <header>
        <div class="container">
            <a href="<?php echo get_site_url() ?>" class="voltar"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/arrow-back.svg" alt=""></a>

            <nav class="menu-nav">
                <ul class="nav-list">
                    <li><a href="#hero">EMPREENDIMENTO</a></li>
                    <li><a href="#img-principal">CARACTERÍSTICAS</a></li>
                    <li><a href="#apartamentos">APARTAMENTOS</a></li>
                    <li><a href="#diferenciais">DIFERENCIAIS</a></li>
                    <li><a href="#localizacao">MAPA</a></li>
                </ul>
            </nav>

            <nav class="menu-nav-mobile">

                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>

                <ul class="nav-list-mobile">
                    <li><a href="#hero">EMPREENDIMENTO</a></li>
                    <li><a href="#img-principal">CARACTERÍSTICAS</a></li>
                    <li><a href="#apartamentos">APARTAMENTOS</a></li>
                    <li><a href="#diferenciais">DIFERENCIAIS</a></li>
                    <li><a href="#localizacao">MAPA</a></li>
                </ul>
                
            </nav>

        </div>
    </header>

    <section id="empreendimento">
        <div class="container">
            <p class="sobre-icon">
                Ícone é um elemento que transcende o tempo, um marco que supera os limites do imaginário através de uma visão inovadora e transformadora. Seu legado <strong>I</strong>nspira,  gera <strong>C</strong>onfiança, <strong>O</strong>usadia e cria algo <strong>N</strong>ovo, disruptivo o suficiente para mudar horizontes. 
                <br>Esses é o Icon Residence, o maior e mais impactante edificífio de Itapoá. 
                <br>Um novo tempo nasce agora.
            </p>
            <div class="container-video">
                <div class="cont-video">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Icone-02.svg" alt="">

                    <iframe src="https://www.youtube.com/embed/tW_9Ouw_5OE" class="video" height="480px"></iframe>
                    
                    <img class="details-top" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Detail1.svg" alt="">
                        
                    <img class="details-bottom" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Detail2.svg" alt="">
                </div>
    
                <div class="info-video">
                    <p class="txt">O MAIOR ÍCONE DE ITAPOÁ</p>
                    <p>
                        “Aos poucos que são movidos pela sofisticação e estão a frente do seu tempo: seu momento é agora, aproveite cada segundo.”
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="img-principal">
        <div class="container">

            <div class="swiper swiperPrincipal">
                <div class="swiper-wrapper">

                    <div class="swiper-slide cards-img">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Hallj.webp" alt="">
                    </div>
                    <div class="swiper-slide cards-img">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/AP-Fundos-A.webp" alt="">
                    </div>
                    <div class="swiper-slide cards-img">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/ICON_A.webp" alt="">
                    </div>

                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>

            </div>
           

            <div class="cards-txt">
                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon1.svg" alt="">
                    <p>59 <br> APARTAMENTOS</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon2.svg" alt="">
                    <p>17 <br> ANDARES</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon3.svg" alt="">
                    <p>3 GARDENS<br> HOUSE</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon4.svg" alt="">
                    <p>7 PLANTAS<br> DISTINTAS</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon5.svg" alt="">
                    <p>ÁREA DE<br> LAZER</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon6.svg" alt="">
                    <p>PISCINA COM <br> BORDA INFINITA</p>
                </div>
                
                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon7.svg" alt="">
                    <p>SALÃO <br> DE FESTA</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon8.svg" alt="">
                    <p>2 VAGAS DE<br> GARAGEM</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon9.svg" alt="">
                    <p>ESPAÇO <br> FITNESS</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon10.svg" alt="">
                    <p>ESPAÇO <br> KIDS</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon11.svg" alt="">
                    <p>ESPAÇO <br> GAME</p>
                </div>

                <div class="card">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/icon12.svg" alt="">
                    <p>VISTA <br> MAR</p>
                </div>

            </div>
        </div>
    </section>

    <section id="apartamentos">
        <div class="container">

            <div class="separador-apartamento">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Vector-apartam.svg" alt="">
            </div>

            <div class="cont-apart">

                <div id="front-slider" class="swiper mySwiper">
                    <div class="swiper-wrapper">
    
                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Estar_A.webp" alt=""> 
                        </div>

                        <div class="swiper-slide">
                            <!-- <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/AP_Fundos_B.webp" alt=""> -->
                            <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Estar_B.webp" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/sacada.webp" alt=""> 
                        </div>
    
                        
                        
                    </div>
                    
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
    
                </div>

                <div id="front-garden-slider" class="swiper mySwiper">
                    <div class="swiper-wrapper">
    
                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/fGarden01.webp" alt=""> 
                        </div>
    
                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/fGarden02.webp" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/AP_Garden03.webp" alt="">
                        </div>
                        
                    </div>
                    
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
    
                </div>

                <div id="coast-slider" class="swiper mySwiper">
                    <div class="swiper-wrapper">
    
                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/cFundos.webp" alt=""> 
                        </div>
    
                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/AP_Fundos_B.webp" alt="">
                        </div>

    
                        
                    </div>
                    
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
    
                </div>

                <div id="coast-garden-slider" class="swiper mySwiper">
                    <div class="swiper-wrapper">
    
                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri();?>/assets/img/lp-icon/cGarden13.webp" alt=""> 
                        </div>
    
                        <div class="swiper-slide">
                            <img class="img-left" src=" <?php echo get_template_directory_uri();?>/assets/img/lp-icon/AP_Garden14.webp" alt="">
                        </div>
                    
                        
                    </div>
                    
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
    
                </div>
                
                
                <div class="cont-right">
                    <h3>Apartamento</h3>
                    <div class="info-nav">
                        <ul class="tabs info-top">
                            <li class="tab"><a class="active" href="#front-slider">Front</a></li>
                            <li class="tab"><a href="#front-garden-slider">Front Garden</a></li>
                            <li class="tab"><a href="#coast-slider">Coast</a></li>
                            <li class="tab"><a href="#coast-garden-slider">Coast Garden</a></li>
                        </ul>
    
                        <div class="details-right"></div>
    
                        <div class="info-bottom">
    
                            <div id="front-slider-txt" class="info-bottom">
                                <!-- <p>FRONT Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis ullam.</p> -->
                                <div class="list-nav">
                                    <ul>
                                        <li>136.10 e 138.24m² de área total privativa</li> 
                                        <li>3 Suítes</li> 
                                        <li>Vista Mar</li> 
                                        <li>2 Vagas de garagem</li> 
                                    </ul>
                                </div>
                            </div>
    
                            <div id="front-garden-slider-txt" class="info-bottom">
                                <!-- <p>FRONT GARDEN Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis ullam.</p> -->
                                <div class="list-nav">
                                    <ul>
                                        <li>460m² área total privativa</li> 
                                        <li>3 Suítes</li> 
                                        <li>Piscina privativa</li> 
                                        <li>Espaço zen</li>
                                        <li>Pergolado</li>
                                    </ul>
                                </div>
                            </div>
    
                            <div id="coast-slider-txt" class="info-bottom">
                                <!-- <p>COAST Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis ullam.</p> -->
                                <div class="list-nav">
                                    <ul>
                                        <li>117.58 e 120.24m² área total privativa</li> 
                                        <li>3 Quartos</li> 
                                        <li>1 Suíte</li> 
                                        <li>2 Vagas de garagem</li>
                                    </ul>
                                </div>
                            </div>
    
                            <div id="coast-garden-slider-txt" class="info-bottom">
                                <!-- <p>COAST GARDEN Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis ullam.</p> -->
                                <div class="list-nav">
                                    <ul>
                                        <li>245 e 279m² área total privativa</li> 
                                        <li>3 Quartos</li>
                                        <li>1 Suíte</li>
                                        <li>Piscina privativa</li> 
                                        <li>Espaço zen</li> 
                                        <li>Pergolado</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div> 
                    </div>
                </div>

            </div>
            
            
        </div>
    </section>

    <section id="area-lazer">

        <div class="container">
            <div class="details-lazer">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Icone-lazer.svg" alt="">
                <h3>Área de Lazer</h3>
            </div>
        </div>

            
            <div class="lazer-left"> 
                <div class="container">
                    <div class="cont-left">    
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Piscina_B.webp" alt="">
                    </div>

                    <div class="cont-right">
                        <p class="destaque">Piscina com borda infinita e parede de vidro</p>
                        <p>Onde a água se funde com o horizonte e a paisagem se torna uma parte do seu paraíso particular.</p>
                    </div>
                </div>
            </div>

            <div class="lazer-right">

                <div class="container">
                    <div class="cont-left">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Festas_A.webp" alt="">
                    </div>
    
                    <div class="cont-right">
                        <p class="destaque" >Salão de Festa</p>
                        <p>O cenário perfeito para celebrar ocasiões especiais e criar memórias inesquecíveis.</p>
                    </div>
                </div>

                <div class="bg-detail"></div>

            </div>

            <div class="lazer-left">

                <div class="container">
                    <div class="cont-left">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Brinquedoteca.webp" alt="">
                    </div>
    
                    <div class="cont-right">
                        <p class="destaque" >Espaço Kids e Game</p>
                        <p>Com um amplo espaço kids e uma área de games para que as crianças se divirtam enquanto os adultos relaxam.</p>
                    </div>
                </div>
            </div>

            <div class="lazer-right">
                <div class="container">
                    <div class="cont-left">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Fitness.webp" alt="">
                    </div>
    
                    <div class="cont-right">
                        <p class="destaque" >Espaço Fitness</p>
                        <p>O local oferece um espaço fitness bem equipado, perfeito para quem busca manter um estilo de vida ativo e saudável.</p>
                    </div>
                </div>
                <div class="bg-detail"></div>
            </div>

            <div class="lazer-left">

                <div class="container">
                    <div class="cont-left">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Quiosque_A.webp" alt="">
                    </div>
    
                    <div class="cont-right">
                        <p class="destaque" >Quiosques</p>
                        <p>Oferecemos quiosques encantadores, onde os clientes podem desfrutar de refeições ao ar livre e experiências únicas.</p>
                    </div>
                </div>
            </div>

    </section>

    <section id="diferenciais">

        <div class="container">

            <div class="container-diferenciais">
                
                <div class="cont-left">
                    <div id="sustentabilidade-cont">
                        <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/ICON.webp" alt="">
                    </div>
                    <div id="apartamentos-cont">
                        <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/AP_Garden11.webp" alt="">
                    </div>
                    <div id="seguranca-cont">
                        <img class="img-left" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/AP_Garden02.webp" alt="">
                    </div>
                </div>
                
                <div class="cont-right">
                    <h3>Diferenciais do Empreendimento</h3>
                    <div class="info-nav">
                        <ul class="tabs info-top">
                            <li class="tab"><a class="active" href="#sustentabilidade-cont">Sustentabilidade</a></li>
                            <li class="tab"><a href="#apartamentos-cont">Apartamentos</a></li>
                            <li class="tab"><a href="#seguranca-cont">Segurança e Serviços</a></li>
                        </ul>

                        <div class="details-right"></div>

                        <div id="sustentabilidade-txt" class="info-bottom">
                            <p>Nós acreditamos que o compromisso com a sustentabilidade não é apenas uma escolha, é uma responsabilidade. No nosso empreendimento, a sustentabilidade é o nosso alicerce, e estamos transformando o sonho de um futuro mais verde em realidade.</p>
                            <div class="list-nav">
                                <ul>
                                    <li>Espera para veículos elétricos</li>
                                    <li>Reaproveitamento de água da chuva</li>
                                </ul>
                            </div>
                        </div>
                        <div id="apartamentos-txt" class="info-bottom">
                            <p>Estes não são apenas apartamentos; são espaços que definem a evolução da vida moderna. Com tecnologia de ponta e design inovador, nossos apartamentos oferecem uma experiência única de viver.</p>
                            <div class="list-nav">
                                <ul>
                                    <li>Sacada de frente para o mar</li> 
                                    <li>Dois elevadores inteligentes</li> 
                                    <li>Fechadura inteligente</li> 
                                    <li>Infraestrutura para automação</li> 
                                    <li>Conforto térmico e lumínico</li>
                                </ul>
                            </div>
                        </div> 
                        <div id="seguranca-txt" class="info-bottom">
                            <p>Imagine poder desfrutar de cada momento, sabendo que sua família, seus bens e seu futuro estão protegidos. Com sistemas de segurança de última geração e uma equipe dedicada, nós cuidamos de você 24 horas por dia, 7 dias por semana.</p>
                            <div class="list-nav">
                                <ul>
                                    <li>Controle de acesso nos elevadores, nas áreas comuns e lazer por biometria e/ou senha</li> 
                                    <li>Sistema de monitoramento por câmeras em todo o empreendimento</li> 
                                    <li>Guarita 24 horas</li> 
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="localizacao">

        <div class="container">
            <div id="map" class="local">
                
            </div>
            <div class="card-local">
                <p class="destaque">Localidade</p>
                
                <p class="endereco">Rua Juscelino Kubistschek, nº 194 <br> Itapema do Norte, Itapoá, Santa Catarina</p>
                <a href="https://maps.app.goo.gl/B7ndVgvbDefStpoB8" target="_blank">Ver mapa completo</a>
            </div>
        </div>

    </section>

    <section id="call-action">
        <div class="container">

            <div class="cont-call">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Icon-logo.svg" alt="">

                <div class="info-call">
                    <h3>Fale com um corretor especialista</h3>
                    <p>Junte-se a nós para uma experiência de qualidade e excelência. Deixe-nos construir o seu sonho! Clique para viver um novo tempo.</p>
                    <a href="https://wa.me/554797529190" target="_blank" class="button-call">
                        <p>SAIBA MAIS</p>
                    </a>
                    
                </div>
            </div>

        </div>

    </section>

    <footer>
    <div class="container">
        <div class="footer-top">

            <div class="info-footer logo">
                <img class="top" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/Icon-footer.svg" alt="">
                <img class="bottom" src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/LogoGZ.svg" alt="">
            </div>

            <div class="info-footer txt">
                <p class="destaque">NAVEGUE</p>
                <a href="">Início</a>
                <div class="details"></div>
                <a href="">Quem somos</a>
                <div class="details"></div>
                <a href="">Contato</a>
                <div class="details"></div>
            </div>

            <div class="info-footer txt">
                <p class="destaque">INSTITUCIONAL</p>
                <a href="">Política de Privacidade</a>
                <div class="details"></div>
                <a href="">Termos de Uso</a>
            </div>

            <div class="info-footer">
                <p class="destaque last">FALE CONOSCO</p>
                <p class="contato">atendimento@grassizappelini.com.br <br> (47) 9752-9190 <br> Seg. a Sex. das 09h00 às 18h00</p>
            </div>
        </div>

        <div class="separador-footer"></div>

        <div class="creditos">
            <p>Grassi Zappelini, 2023 © Todos os direitos reservados.</p>
            <div class="midias-sociais">
                <a href="https://www.instagram.com/grassizappelini/" target="_blank"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/insta-icon.svg" alt=""></a>
                <a href="https://www.facebook.com/grassizappelini/?locale=pt_BR" target="_blank"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/lp-icon/face-icon.svg" alt=""></a>
            </div>
        </div>
    </div>
</footer>

<?php
get_footer();
?>