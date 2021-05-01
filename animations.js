function switchClasses() {
    var headerH = $('header').outerHeight(true);
    var scroll = $(window).scrollTop();
    if ( scroll >= headerH) {
        $('.hum-btn').addClass('fadeDown');
        console.log(scroll);
    } else {
        $('.hum-btn').removeClass('fadeDown');
        console.log(scroll);

    }
}

$(window).scroll(function(){
    switchClasses();
});