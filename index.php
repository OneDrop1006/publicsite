<!--header.php　呼び出し -->
<?php get_header(); ?>

<!-- home画面の場合分岐処理 -->
<?php if(is_home()): ?>
<!-- TODO トップイメージのスライドショー化kmn　 -->
    <div class="top-img">
        <ul class="slider">
            <li class="slider-item item1"></li>
            <li class="slider-item item2"></li>
        </ul>
        <div class="msg-wrapper">
            <p class="msg">食べる時も、</p>
            <p>笑う時も、</p>
            <p><span class="impact">歯</span>は大事</p>
        </div>
    </div>
<?php endif; ?>



<!--最新情報    記事データの展開処理  -->
<div class="article-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="news-header-msg col-xs-12 col-lg-4">
                <h2>最新情報</h2>
            </div>
            <div class="col-lg-4"></div>
        </div>  
        <?php if(have_posts()): ?>
        <ul class="row">
            <?php while(have_posts()) : the_post(); ?>
                <div class ="news-cell col-xs-12 col-lg-4">
                    <a href="<?php the_permalink() ;?>">
                        <li><?php the_title(); ?></li>
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium'); ?> 
                        <?php endif; ?>
                    </a>
                </div>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>

<!--footer.php　呼び出し -->
<?php get_footer(); ?>