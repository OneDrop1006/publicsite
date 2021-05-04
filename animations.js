// スクロール検知・ハンバーガーメニュの活性化制御
function switchClasses() {
    var headerH = $('header').outerHeight(true);
    var scroll = $(window).scrollTop();
    if ( scroll >= headerH) {
        $('.hum-btn').addClass('fadeDown');
    } else {
        $('.hum-btn').removeClass('fadeDown');
    }
}

// スクロール時のメソッド
$(window).scroll(function(){
    switchClasses();
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