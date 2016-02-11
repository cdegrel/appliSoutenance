$(function() {
    $('#navigation').find('a').stop().animate({'marginLeft':'-85px'},1000);

    $('#navigation').find('> li').hover(
        function () {
            $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
        },
        function () {
            $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
        }
    );
});