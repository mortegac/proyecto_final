
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












$(document).ready(function(){
    
    $( "#frmBoton" ).click(function(e) { e.preventDefault();  Envio(); });
    $( "input" ).focusout(function(e){ Valida(); });

   // $('button').attr("disabled","disabled");
   // $('#frmBoton').addClass( "frmBotonDisable" );



 });



function Valida(){
   // alert("ENTRE A VALIDA");
    // if ($(this).val().trim() === '') { 
    //     $('button').attr("disabled","disabled");

    //  }else{
    //     var indice=0;
    //     $( "input" ).each(function(){ //RECORRE TODOS LOS ELEMENTOS DE LA ETIQUETA
            
    //         if ($(this).val().trim() === '') {   
    //             indice++;
    //         }
    //      });


    //     if (indice > 0) {   
    //             console.log("PASO VALIDACION");
    //     }else{
    //             console.log("error");
    //             button.removeAttr("disabled");
    //     }
    // };


};


function Envio(){
    
    //alert("PRESIONES");       //previene la ejecusion del evento (osea el submit)
    // var nom= $('#frmNombre').val();
    // var ape= $('#frmEmail').val();
    // var desc= $('#frmMsg').val();


    // $('#nombre').focus();
     

    console.log("Hice clic");

    params={};
    params.action="env";
    params.origen= "HOTEL CORONA";
    params.emailorigen= "info@apgca.cl";
    params.nombre= $("#frmNombre").val();
    params.email= $("#frmEmail").val();
    params.mensaje= $("#frmMsg").val();
  
    var post = $.post("process.php", params, siContacto, 'json'); 

};

function siContacto(r){
console.log(JSON.stringify(r));

};

