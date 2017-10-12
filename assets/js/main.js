var NewsTime = 2000;       //set time for show ever info
var TextTime = 100;       //set time for ever word between
            
var newsi = 0;
var txti = 0;
var txttimer;     //get setInterval value 
var newstimer;
            
var newstitle = new Array();       //set array for newtitle 
    newstitle[0] = "Hi, I am zoe!"+"<br>"+"Web developer and Web designer"; //array title show on DOM
    newstitle[1] = "Wanna know more about me?"; 
    newstitle[2] = "Scroll the page" + "<br>" + "come on";          
    function shownew(){
        hwnewstr = newstitle[newsi];       //set array number by newsi
                 
    if(txti>=hwnewstr.length){
        clearInterval(txttimer);  
        clearInterval(newstimer);  
        newsi++;     
        if(newsi>=newstitle.length){
            newsi = 0;   //clean newsi when newsi longer than array
        }
        newstimer = setInterval("shownew()",NewsTime);     //after 2000s restar shownew() function
        txti = 0;    
        return;
    }
    clearInterval(txttimer);   

    document.getElementById("Hotnews").innerHTML = hwnewstr.substring(0,txti+1);

    txti++;   //get string one by one
    txttimer = setInterval("shownew()",TextTime);    //set string text word time and  
}
$(document).ready(function(){shownew();});


// Add menu toggle buttom
$(document).ready(function () {
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



