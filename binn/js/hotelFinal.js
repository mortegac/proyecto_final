
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));



//Script Slider -->
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

//Script Slider -->
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
                speed: 1500
                });
            });

//Fin Script Slider -->



//Script Scroll Menu -->
            $(function(){
                $.scrollIt({
                    scrollTime: 1000,
                    topOffset: -100,
                });
            });
//Fin Script Scroll Menu -->

//Script Color Menu -->
            $(window).scroll(function() {
                if ($(this).scrollTop() > 2){  
                    $('.menu-background').addClass("menu-background2");
                    $('span').css('background-color', 'black');
                }
                else{
                    $('.menu-background').removeClass("menu-background2");
                    $('span').css('background-color', 'white');
                }
            });
//Fin Script Color Menu -->

//Script Menu Responsive -->
            $(document).ready(function(){
                $('.menu-btn').click(function(){
                    $(".responsive-menu").toggleClass("expand");
                });
            });
