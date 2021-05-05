// スクロール検知・ハンバーガーメニュの活性化制御
function switchClasses() {
    var headerH = $('header').outerHeight(true);
    var scroll = $(window).scrollTop();
    if ( scroll >= headerH) {
        $('.hum-btn').addClass('fadeDown');
        $('#nav-menu').removeClass('hum-btn-activate');
        $('#menu-global-navigation').addClass('hum-btn-menu');
        $('.close-btn').removeClass('close-btn-active');
    } else {
        $('.hum-btn').removeClass('fadeDown');
        $('#menu-global-navigation').removeClass('hum-btn-menu');
    }
}

// スクロール時のメソッド
$(window).scroll(function(){
    switchClasses();
});

// ハンバーガーメニュー押下時のアクション
$('.hum-btn').click(function(){
    $('#nav-menu').toggleClass('hum-btn-activate');
    $('.hum-btn').toggleClass('fadeDown');
    $('.close-btn').toggleClass('close-btn-active');
})

$('.close-btn').click(function(){
    $('#nav-menu').toggleClass('hum-btn-activate');
    $('.hum-btn').toggleClass('fadeDown');
    $('.close-btn').toggleClass('close-btn-active');
});

//////////////////////////////

//トップイメージのスライドショー
$('.slider').slick({
    autoplaySpeed: 3000,
    speed: 1000,
    autoplay: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});

$('.slider').on('touchmove',function(event,slick,currenrClide,nextSlide){
    $('.slider').slick('slickPlay');
})