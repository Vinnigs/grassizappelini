<?php

//Verificando SLUG atual
global $post;
$page_slug = $post->post_name;

if($page_slug == 'icon-residence'){
    $lp_icon = true;
}elseif($page_slug == 'inicio'){
    $inicio = true;
}elseif($page_slug == 'sobre-nos'){
    $sobre_nos = true;
}elseif($page_slug == 'conheca-itapoa'){
    $conheca_itapoa = true;
}elseif($page_slug == 'contato'){
    $contato = true;
}elseif($page_slug == 'empreendimentos'){
    $empreend = true;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title();?></title>
    <?php echo wp_head() ?>

    <?php if(isset($lp_icon)){ ?>
    <!-- HEAD LP ICON -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.css"/>
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/img/lp-icon/icon-res-favicon.svg">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lp-icon/main.css">
    <!---->
    <?php } ?>

    <?php if(isset($conheca_itapoa)){ ?>
    <!-- HEAD CONHEÇA ITAPOA -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/itapoa.css">
    <!---->
    <?php } ?>

    <?php if(isset($sobre_nos)){ ?>
    <!-- HEAD CONHEÇA ITAPOA -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sobre.css">
    <!---->
    <?php } ?>

    <?php if(isset($contato)){ ?>
    <!-- HEAD CONTATO -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contato.css">
    <!---->
    <?php } ?>

    <?php if(isset($inicio)){ ?>
    <!-- HEAD INICIO -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <!---->
    <?php } ?>

    <?php if(isset($empreend)){ ?>
    <!-- HEAD EMPREENDIMENTOS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/empreendimentos.css">
    <!---->
    <?php } ?>

</head>
<body>

<div class="floating-form">
    <div class="form">
        <div class="info">
            <p class="form-titulo">👋 Olá, está precisando de ajuda?</p>
            <p>Preencha o formulário que entraremos em contato</p>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="41ee0ea" title="Formulário WhatsApp Button"]'); ?>
    </div>

    <a id="floating-whatsapp" href="https://wa.me/5547997529190"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp-logo.svg" style="width:64px"></a>
</div>
