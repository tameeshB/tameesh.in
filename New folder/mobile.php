<!DOCTYPE html>
<html>
<head>
  <title>Tameesh Biswas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Dancing+Script' rel='stylesheet' type='text/css'>
	 
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script>
  	//for defining functions
  	var ei;
  	function call_slider(ei){
  		//alert('triggered');
  		$("#menuimg").fadeOut();
  		$("#othrpage,iframe").fadeIn('slow');
  		$("#backimg").fadeIn();
  		$("#othrpage").attr('src',ei);
  	}
  	function close_slider(ei){
  		//alert('triggered');
  		$("#menuimg").fadeIn();
  		$("#othrpage,iframe").fadeOut('slow');
  		$("#backimg").fadeOut();
  		$("#othrpage").attr('src','sl_load.html');
  	}
  	function goto(url){
	 	  		 	window.open(url,'_blank');
	 	  		 //	window.open(url);
	 	  		 }
  </script>
  <script>//for event handlers
  	$(window).load(function(){ var a=0;
  		

  		$("#menuimg").click(function(){
  			if(a==0){a=1;$(this).css('background-position-x','90%');$("#navigbar").slideDown();}
  			else{a=0;$(this).css('background-position-x','5%');$("#navigbar").slideUp();}

  		}); 		
  		$("#backimg").click(function(){
  			close_slider();
  		});
  		$("#navigbar").slideUp();
  		var widt = $(window).width();
  		var heig=$(window).height();
  		$(".row").height(heig);
  		$("#card1").height(heig);
  		$("#gallery_header").css('font-size',widt*0.20);
  		$(window).scroll(function(){
  			top=$(document).topScroll();

  			//smooth scroll 
  		
  		});

  		$("a").on('click', function(event) {
	 	 	 	if(a==1){$("#navigbar").slideUp();a=0;$("#menuimg").css('background-position-x','5%');}
    	 		// Make sure this.hash has a value before overriding default behavior
    			if (this.hash !== "") {
      			// Prevent default anchor click behavior
      			event.preventDefault();

      			// Store hash	
      			var hash = this.hash;
      			$('html, body').animate({
        		scrollTop: $(hash).offset().top
      			}, 400, function(){
   
        				// Add hash (#) to URL when done scrolling (default click behavior)
        				window.location.hash = hash;
      				});
    			} // End if
  			 });//smooth scroll end

  	});
  </script>

  <style>
  *{
	font-family: 'Josefin Sans', sans-serif;
}
 body{
 	background:#685e9a;
 }
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  #navigbar{
  	z-index:3;
  }
 .cards{
 	
 }
 .halves{
 	position:relative;
 	padding:20px;
 	
 	left:0;
 	
 	width:100%;
 }
 .uhalf{
 	top:0;
 }
 .lhalf{
 	bottom:0;
 }
  #card1{
 z-index: 4;
  background-image: url('pic.jpg');
  background-size: cover;
  background-position-x: 50%;
  height:100%;
}

#card2{
	background-image: url('sn.jpg');
 	background-size: cover;	
 	background-position-x: 60%;
 	height:100%;
}
#card3{
	background-image:url('codebg2mob.jpg');
	background-size:cover;
		background-position-x: 50%;
		height:100%;
		padding: 20px;
		padding-top: 40px !important;
}
#card4{
	background-image:url('otc1.jpg');
	background-size:cover;
	color:black;
	background-position-x: 50%;
	height:100%;
}
#card5{
	background-image:url('gbg.png');
	background-size:cover;
	background-position-x: 26.5%;
	height:100%;
}
#card6{
	background-image: url('bg2.jpg');
    background-size: cover;
    background-repeat: no-repeat;	
    height:200% !important;
}
.active{
  width:100% !important;
}

#card1wrap{
  position: absolute;
  bottom: 0;
  padding: 10px;
}
.name{
	color: #101013;
	font-size:70px !important;
    text-shadow: #FFFFFF 0 0 15px;
    line-height: 70px;
}
.desc{
 	color: #000000;
 	font-size: 25px;
    text-shadow: rgba(231, 152, 38, 0.97) 0px 0px 30px;
}
#btn2{
 
}

@-webkit-keyframes glowing {
  0% { background-color: rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 3px #000000; color: #FFFFF;}
  50% { background-color:rgba(136, 191, 73,0.7); -webkit-box-shadow: 0 0 40px #459cbd;color: #000000; }
  100% { background-color: rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 3px #000000color: #FFFFF; }
}

@-moz-keyframes glowing {
  0% { background-color: rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 3px #000000; color: #FFFFF;}
  50% { background-color:rgba(136, 191, 73,0.7); -webkit-box-shadow: 0 0 40px #459cbd;color: #000000; }
  100% { background-color: rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 3px #000000color: #FFFFF; }
}

@-o-keyframes glowing {
  0% { background-color: rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 3px #000000; color: #FFFFF;}
  50% { background-color:rgba(136, 191, 73,0.7); -webkit-box-shadow: 0 0 40px #459cbd;color: #000000; }
  100% { background-color: rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 3px #000000color: #FFFFF; }
}

@keyframes glowing {
  0% { background-color: rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 3px #000000; color: #FFFFF;}
  50% { background-color:rgba(136, 191, 73,0.7); -webkit-box-shadow: 0 0 40px #459cbd;color: #000000; }
  100% { background-color: rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 3px #000000color: #FFFFF; }
}

#btn2{
  -webkit-animation: glowing 3000ms infinite;
  -moz-animation: glowing 3000ms infinite;
  -o-animation: glowing 3000ms infinite;
  animation: glowing 3000ms infinite;
}
.buttonwa{
	font-size: 30px;
 height:50px !important;
 border-radius: 13px !important;
	font-family: 'Josefin Sans', sans-serif;
    color: cornsilk;
    cursor:pointer;
    position: relative;
    border-radius: 5px;
    margin: 5px;
    /*padding: 5px;*/
    padding-top: 5px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    left: 5px;
    width:90%;
    background: rgba(0, 0, 0, 0.7);
    text-align: center;
    vertical-align: middle;
    display: inline-block;
    justify-content: center;
    align-items: center;
    box-shadow:#000000 0 0 5px;
    -webkit-transition: background 0.5s,color 0.5s;
	border:0px black solid;
}
#snippet_title{
	margin-top: 50px !important;
	}
	#work_title{
	margin-top: 48% !important;
	}
#otc_wrapper{
	padding:20px;
	padding-top:50px !important;
}	

#photo{
	font-size: 20px;
	color:#41CBF5;
	cursor:pointer;
	-webkit-transition:color 0.25s;
}
#photo:hover{
	color:#42F180;
}
#gallery_header{
	position:relative;
	top:50% !important;
	color: black;
    text-shadow: #cd4a0f 0 0 15px;
}
.first{
	 width:50px;
 	background-size: 90%;
 	background-repeat: no-repeat;
}
.second{
	color:#FFFFFF;
	-webkit-transition:color 0.5s;
}

.second:hover{
	color:#000000;
}
#mail_logo{
	 background-image: url('./logos/email.png');
}
#fb_logo{
	 background-image: url('./logos/fb.png');
}
#twitter_logo{
	 background-image: url('./logos/twitter.png');
}
#insta_logo{
	 background-image: url('./logos/insta.png');
}
#gplus_logo{
	 background-image: url('./logos/gplus.png');
}
#linkedin_logo{
	 background-image: url('./logos/linkedin.png');
}
#git_logo{
	 background-image: url('./logos/git.png');
}

td{
	height: 50px;
	cursor: pointer;
}
#before{
	width:100%;
	padding:10px;
}
#after{
	padding:10px;
}

.contact{

     margin: 20px;
     padding:5px;
     border-radius:10px;
     
     color: cornsilk;
     cursor:pointer;
     border-radius: 5px;
     margin: 5px;
     padding-top: 5px;
     padding-right: 10px;
     padding-bottom: 5px;
     padding-left: 10px;
        
     background: rgba(0, 0, 0, 0.7);
     
     box-shadow:#000000 0 0 5px;
     -webkit-transition: background 0.5s,color 0.5s;  margin-left: auto;
    margin-right: auto; 

}
#msghead{
	/*border-bottom: 1px white solid;*/
}
#menuimg{
	position: fixed;
	border-radius: 10px;
	background-image: url('menbtn.png');
	top: 5px;
	right:5px;
	height:50px;
	width:50px;
	background-size: cover;
	z-index: 3;
	background-position-x:5%;
}
#backimg{
	position: fixed;
	display:none;
	border-radius: 10px;
	background-image: url('mback.png');
	top: 5px;
	left:5px;
	height:50px;
	width:50px;
	background-size: cover;
	z-index: 3;
	background-position-x:5%;
}
#othrpage{
	position:fixed;
	display:none;
	top:0;
	left:0;
	height:100%;
	width:100%;
	z-index:2;
}
</style>

</head>
<body><b>
<nav id="navigbar" class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">
    
    <li><a href="#card1">Home</a></li>
    <li><a href="#card2">Snippet</a></li>
    <li><a href="#card3">Code</a></li>
    <li><a href="#card4">OTC</a></li>
    <li><a href="#card5">Gallery</a></li>
    <li><a href="#card6">Web Presence</a></li>
    <li><a href="#msghead">Message Me!</a></li>
  </ul>
</nav>
<div id="card1" class="container-fluid" style="height:100%">
<div id="card1wrap">
  <h1 class="name"><i>Tameesh Biswas</i></h1>
  <h3 class="desc">Computer Science, Programming and physics lover ♥ </h3><center>
 	<button id="btn2" class="buttonwa" onclick="call_slider('./about/index.php')">Know more</button>
 	<!--<img src="dwn.png">-->
 	 </center> </div>
</div>



<div class="container-fluid">
<div id="card2" class="cards row">
	<!--snippet-->
	<div id="snippet_wrapper" class="halves uhalf" style="height:45%">
		<h1 id="snippet_title" style="font-size:50px">Snippet!</h1>
	  <h4 id="snippet_desc">My own micro(and at times macro) Blog<br>Built from scratch by me! </h4>
	  <button id="bt1" class="buttonwa" onclick="call_slider('./snippet/index.php')">Get There!</button><center>
	  <h2 style="position:relative;bottom:0">Latest Activity<hr style="width:60%">
	</div>
	<div id="latest_wrapper" class="halves lhalf" style="height:50%">

	</div></center>
</div>
<div id="card3" class="cards row">

	<div id="work_title"><h1 style="font-size:50px;text-shadow:#FFFFFF 0 0 7px">Projects</h1></div>
	  		<div id="work_desc" style="font-size:20px;color:#FFFFFF"><h4>A portfolio of past and present <br>projects.</h4></div>
	  		<button class="buttonwa" id="bt3" onclick="call_slider('./about/index.php#thirdhead')">See them-></button>
</div>
<div id="card4" class="cards row">
	<div id="otc_wrapper"><b>
	  		<h1 id="otc_title" style="font-size:50px;text-shadow:#FFFFFF 0 0 7px">Stuff other than coding...</h1>
	  		<h4 id="otc_desc" ></h4>
	  		<h2 id="otc_list" style="font-size:20px;color:#000000">
	  			<ul type="circle">
	  				<li>Photography  <a id="photo" onclick="call_slider('./gallery/index.php')">&nbsp;|&nbsp; View my Photography portfolio</a></li>
	  				<li>Cycling</li>
	  				<li>Badminton</li>
	  				<li>Listening to music!</li>
	  			</ul>
	  		</h2>
	  		<!-- div class="button" id="bt4">There!</div -->
			</b>
	  		</div>
</div>
<div id="card5" class="cards row"><center><b>
<div id="gallery_wrap"><br><br><br><br><br><br><br><br><br><br><br><br>
	<H1 align="center" id="gallery_header" >#Gallery</H1>
	    <center><button class="buttonwa" id="gallery_button" onclick="call_slider('./gallery/index.php',1)">View the gallery</button></b></center>	
</div>
</div>	    

<div id="card6" class="cards row"><center>
	<div id="before">
				<h1 id="webpresence_head" style="font-size:50px;border-bottom:1px white solid">Web Presence</h1><br>
	  			<table width="70%" border="0">
	  			<tr id="first" onclick="goto('mailto:me@tameesh.in')"><td class="first" id="mail_logo"></td><td class="second">&nbsp;&nbsp;&nbsp;me@tameesh.in</td></tr>
	  			<tr id="second" onclick="goto('//facebook.com/tameesh.biswas')"><td class="first" id="fb_logo"></td><td class="second">&nbsp;&nbsp;&nbsp;\tameesh.biswas</td></tr>
	  			<tr id="third" onclick="goto('//twitter.com/tameeshB')"><td class="first" id="twitter_logo"></td><td class="second">&nbsp;&nbsp;&nbsp;@tameeshB</td></tr>
	  			<tr id="fourth" onclick="goto('//instagram.com/tameeshbiswas')"><td class="first" id="insta_logo"></td><td class="second">&nbsp;&nbsp;&nbsp;@tameeshbiswas</td></tr>
	  			<tr id="fifth" onclick="goto('//plus.google.com/+TameeshBiswas')"><td class="first" id="gplus_logo"></td><td class="second">&nbsp;&nbsp;&nbsp;+TameeshBiswas</td></tr>
	  			<tr id="sixth" onclick="goto('https://www.linkedin.com/in/tameesh-biswas-44179659')"><td class="first" id="linkedin_logo"></td><td class="second">&nbsp;&nbsp;&nbsp;in/tameesh-biswas-44179659</td></tr>
	  			<tr id="seventh"><td class="first" id="git_logo"></td><td class="second">&nbsp;&nbsp;&nbsp;@tameeshbiswas</td></tr>
	  			</table>
	  		</div>
	  		<div id="after">
	  <!--a simple comment on my code using my new keyboard-->
	  			<form action="javascript:formsend()">  		
	  			
	  			<h2 id="msghead">Message me! :</h2><hr style="width:60%"><br><left>
	  			<input id="nameholder" class="contact" type="text" name="name" data="Name" value="Name" width="200px" ><br>
	  			<input id="emailholder" class="contact" type="text" name="email" data="email" value="email" width="200px" \><br>
	  			<textarea id="messageholder" class="contact" name="message" data="--Your message goes here--" cols="40" rows="5">--Your message goes here--</textarea><br>
	  			<input id="submitholder" class="buttonwa" type="submit" value="Send!" style="position:relative;left:0"></left>
	  			<div id="hogaya" style="width:60%;background:rgba(73, 230, 24,0.7);color:white;border-radius:10px;font-size:30px;opacity:0"><br>Sent!<br><small style="font-size:19px"><br></small><br><br></div>
	  			
	  			</form>
	  			<script>
	  			function formsend(){//$("small").append($("#emailholder").val());
	  						$.post("messenger.php",
    						{ 
       						
       						 name: $("#nameholder").val(),
        					email: $("#emailholder").val(),
        					message: $("#messageholder").val()
    						},
    						function(data, status){
        					//alert("Data: " + data + "\nStatus: " + status);
        					if(status=='success'){
        						$("small").append(data);
         						$("left").fadeOut(1000,function(){$("#hogaya").animate({opacity:'1'})});
         					
        					}
    						});
	  					}
	  				$(window).load(function(){
	  					$(".contact").focus(function(){
	  						if($(this).val()==$(this).attr('data')){
	  							$(this).val('');
	  						}
	  					});
	  					$(".contact").blur(function(){
	  						if($(this).val()==''){
	  							$(this).val($(this).attr('data'));
	  						}
	  					});

	  					$("#submitholder").click(function(){
	  						
	  					});
	  				});
	  			</script>
	  		</div>	
</center>
</div>
</div>
<iframe id="othrpage" src="sl_load.html" border='0' style="border:0px black solid"></iframe>
<!-- loader start-->
<div id="loader" style="position:fixed;top:0;left:0;width:100%;height:100%;background:grey;padding:30px;z-index:10"><center>
	<img src="301.gif" id="load"></center>
</div><!-- loader end-->
<script>
	 $(window).load(function(){
	 	$("#loader").fadeOut();
	 });
</script>
<div id="backimg"> </div>
<div id="menuimg"> </div>
</b></body>
</html>

