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
}

?>

    <?php if(isset($lp_icon)){ ?>
    <!-- FOOTER LP ICON -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script type="module" src=" <?php echo get_template_directory_uri(); ?>/assets/js/lp-icon/index.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lp-icon/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lp-icon/scripts.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lp-icon/menu-nav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lp-icon/menu-mobile.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lp-icon/modal.js"></script>
    <!---->
    <?php } ?>

    <?php if(!isset($lp_icon)){ ?>
    <!-- FOOTER Grassi Zappelini Website -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/menu-mobile.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/menu-nav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slider.js"></script>
    <!---->
    <?php } ?> 

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/floating-btn.js"></script>

</body>
</html>
