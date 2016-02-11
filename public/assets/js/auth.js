$( document ).ready(function() {
    function changeBackgroundBlur(){
        var backgroundActive = $('#diaporama .active').css('background-image');
        $('.blurLogin').css('background', backgroundActive);
        $('.blurLogin').css('background-position', "50% 50%");
        $('.blurLogin').css('background-attachment', "fixed");
        $('.blurLogin').css('background-size', "cover");
    }
    var tmp =0;
    $('#diaporama li').each(function () {
        tmp+=1;
        $(this).addClass('imgDiapo'+tmp);
    });

    var tmp2 = Math.floor(Math.random()*tmp)+1;
    $('.imgDiapo'+tmp2).addClass('active');
    setInterval(function () {
        $('.imgDiapo'+tmp2).removeClass('active');
        if(tmp2 == tmp){
            tmp2=0;
        }
        var tmp22 = tmp2 +1;
        $('.imgDiapo'+tmp22).addClass('active');
        changeBackgroundBlur();
        tmp2+=1;
    },6000);
    $(window).load(function () {
        changeBackgroundBlur();
        setTimeout(function () {
            $('.textLogoContainer').css('transform','translateX(0px)')
        },150);
    });

});