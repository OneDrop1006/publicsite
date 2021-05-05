<!DOCTYPE html>
<html lang="ja">
<head>
    <?php 
    wp_enqueue_script('jquery');
    wp_head(); 
    ?>
    <title><?php bloginfo('name');?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100&display=swap" rel="stylesheet"> 

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <!-- slick css CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <!-- テーマ作成用 CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
</head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <header class="container">
            <div class="row">
            <div class="logo col-xs-12 col-lg-4">
                <a href="<?php echo home_url(); ?>">
                    <h1 class="logo-letter">吉水歯科医院</h1>
                    <h3 class="eng-letter">Yoshimizu Dental Clinic</h3>
                </a>
            </div>
            <!-- navの有効化/functions.phpでは設定済み TODO 画面確認 -->
            <nav id="nav-menu" class="col-xs-12 col-lg-8">
                <?php
                $args = array(
                    'menu' => 'global-navigation',
                    'menu_class' => '',
                    'container' => 'false',
                );
                // パラメータを引数としてセット
                wp_nav_menu($args);
                ?>
            </nav>
            </div>
            <!-- ハンバーガーメニュー -->
            <div class="hum-btn">
                <span class="fa fa-bars"></span>
           </div>
           <div class=close-btn>
               <i class="fas fa-times"></i>
           </div>
        </header>
        <div class="clear"></div>
   