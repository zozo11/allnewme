// Add menu toggle buttom
$(document).ready(function() {
    var openme = true;
    $(".smallmenu").click(function(){     
        if(openme){
            $(".headermenu").show(function(){
               $(".smallmenu").addClass('sopen');
               $(".smallmenu").css('background','none');
               openme = false;
            });
        }else{
            $(".headermenu").hide(function(){
               $(".smallmenu").removeClass('sopen');
               $(".smallmenu").css('background','linear-gradient(0deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 47%, #ffffff 49%, white 58%, rgba(0, 0, 0, 0) 50%)');
               openme = true;
            });
        }
    });
});

