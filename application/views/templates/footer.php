		</div>
		<div class="footerinfor">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-5 liststyle">
						<div class="title"><span>i</span><a href="">Home</a></div>
						<div class="title"><span>i</span><a href="">Aout Me</a></div>
						<div class="title"><span>i</span><a href="">Post</a></div>
					</div>
					<div class="col-sm-12 col-md-1 midbord"></div>
					<div class="col-sm-12 col-md-6 liststyle">
						<div class="title">Social Media</div>
						<div>
							<p class="linkbtm hvr-float-shadow"><a href="">GIT Me</a></p>	
							<p class="linkbtm hvr-float-shadow"><a href="">Behenc</a></p>
							<p class="linkbtm hvr-float-shadow"><a href="">Video Me</a></p>
							<p class="linkbtm hvr-float-shadow"><a href="">INS Me</a></p>
						</div>
						<div class="contactme">
							<span>icon</span>
							<span>wangziyizoe@gmail.com</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
            //CKEDITOR.replace( 'ckediter' );

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
		    shownew();
        </script>
	</body>
</html>