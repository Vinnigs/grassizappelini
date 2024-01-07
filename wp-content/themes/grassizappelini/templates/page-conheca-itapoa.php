<?php
// Template Name: Conheça Itapoá

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
                    <li><a href="<?php echo get_site_url(); ?>/conheca-itapoa" class="active">Itapoá</a></li>
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
                <h3>Itapoá</h3>
                <p>O Litoral que Mais Cresce no Brasil</p>
            </div>
        </div>
    </section>
    <!---->

    <!-- Seção SOBRE ITAPOÁ-->
    <section class="sobreItapoa">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-itapoa-gz.svg" alt="" class="logo-gz">
            <p class="sobre">Localizada no extremo nordeste de Santa Catarina, fazendo divisa com Paraná, encontramos Itapoá. Um município litorâneo, com 32 km de praias limpas e quentes. Com uma das maiores biodiversidades do país, Itapoá possui diversos atrativos turísticos, naturais e culturais. 
                Além disso, Itapoá é destaque no estado e em todo território nacional. É o litoral que mais cresce no Brasil e possui uma ótima valorização imobiliária, criando um ambiente perfeito para investimentos.
            </p>
    
            <div class="cont-card">
                <div class="card praia">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/itapoa-praia.jpeg" alt="">
                    <p>Desfrute de quilômetros de praias de areia branca e águas cristalinas.  Itapoá oferece praias espetaculares.</p>
                </div>
    
                <div class="card investe">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/itapoa-cidade.jpg" alt="">
                    <p>Itapoá investe em infraestrutura e serviços, garantindo que os moradores tenham acesso a escolas, hospitais e estradas de qualidade.</p>
                </div>
    
                <div class="card investe">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/itapoa-porto.jpg" alt="">
                    <p>Uma economia em crescimento abre portas para oportunidades de trabalho e empreendedorismo.</p>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!-- Seção PONTOS TURÍSTICOS -->
    <section class="pontosTuristicos">
        
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/detail-bg.svg" alt="" class="detail-bg">

        <div class="container">
            <div class="titulo">
                <p class="subtitulo">Itapoá</p>
                <h3>PONTOS TURÍSTICOS</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/separador.svg" alt="" class="separador">
            </div>

            <div class="cont-cards">
                <div class="card farol">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farolN.webp" alt="">
                    <p class="titulo">Farol da Praia do Pontal do Norte</p>
                    <p class="descricao">Essa praia tem águas tranquilas e é perfeita para famílias com crianças. Você pode apreciar a paisagem, ler um livro na grama, experimentar stand up paddle e caiaque. Além disso, é um ótimo lugar para assistir ao pôr do sol e tirar fotos no farol, que é o símbolo mais famoso da cidade. E não se esqueça, o local é bem mantido e tem uma sorveteria e uma igreja católica bem próxima.</p>
                </div>

                <div class="card balneario">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/praia-sai.jpg" alt="">
                    <p class="titulo">Barra do Saí</p>
                    <p class="descricao">Este é um dos lugares mais bonitos da cidade, e está muito próximo da Praia de Itapoá. Se você está em busca de uma praia calma, perfeita para caminhar, relaxar e apreciar a vista, com certeza, este destino oferece tudo o que você procura.</p>
                </div>

                <div class="card farol">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tresPedras.webp" alt="">
                    <p class="titulo">Três pedras</p>
                    <p class="descricao">Talvez o ponto turístico mais badalado de Itapoá. Localizado no ponto mais concentração, as três pedras criam uma praia espetacular. 
                        <br>
                        A Primeira Pedra é a maior, com um grande deck, possui um espaço incrível de contemplação e águas calmas para banho. 
                        <br>
                        A Segunda Pedra, a menor, possui pequenas piscinas naturais e um espaço perfeito para pescaria de hobby.
                        <br>
                        A Terceira Pedra também possui um deck lindo, mas o que mais chama a atenção são as suas ondas, criando um ponto perfeito para a prática de surf.</p>
                </div>

                <div class="card farol">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portoItap.webp" alt="">
                    <p class="titulo">Porto de Itapoá</p>
                    <p class="descricao">O porto de Itapoá está na praia principal da cidade. Muitas pessoas vão lá para assistir aos navios chegando e partindo, além de descarregando mercadorias. Além disso, o lugar é ótimo para tirar fotos bonitas, então não deixe de fazer várias durante sua visita.</p>
                </div>
            </div>
        </div>
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