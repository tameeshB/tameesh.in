<?PHP
	//add "scroll down" gif 
?>
<html>
	 <head>
	 <title>Tameesh Biswas</title>
	 <script type="text/javascript">
		<!--
		if (screen.width <= 699) {
		document.location = "mobile.php";
		}
		//-->
	</script>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="theme-color" content="#16627a">	  
	 	  <link rel="stylesheet" media="only screen and (max-width: 600px)" href="mobile.css" />
			<link rel="stylesheet" media="only screen and (min-width: 601px)" href="uniform.css" />
	 	  <link rel="stylesheet" type="text/css" media="screen" href="landing.css">
	 	  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	 	  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	 	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	 	  <script>
	 	  		 function goto(url){
	 	  		 	window.open(url,'_blank');
	 	  		 //	window.open(url);
	 	  		 };
	 	 	 	 var a=0;
	 	 	 	 var b=0;
	 	 	 	 var k=0;
	 	 	 	 var d=1;
	 	 	 	 var e=0;
	 	 	 	 function scrollevents(){//scroll events function
	 	 	 	 	 var W_height= $(window).height();
	 	   	 	 			 var top = $(document).scrollTop();
	 	   	 	 			 var ratio=top/W_height;
	 	   	 	 			 //for bg fading start
	 	   	 	 			 var c_ratio=1-(2*ratio);
	 	   	 	 			 if(c_ratio<=1 && c_ratio>=0)//code for fade bg
	 	   	 	 			 {
	 	   	 	 			 	 $("#bgimg").css("opacity",c_ratio);
	 	   	 	 			 }
	 	   	 	 			 //fading end
	 	   	 	 			 //switch class
	 	   	 	 			 if((ratio*100)>40 && a==0)
	 	   	 	 			 { 	a=1;
	 	   	 	 			 	$(".name").fadeOut();
	 	   	 	 			 	$(".desc").fadeOut();
	 	   	 	 			 	$(".h_name").fadeIn();
	 	   	 	 			 	$(".h_name").css("display","inherit");
	 	   	 	 			 	//$("#name").switchClass("name","h_name");
	 	   	 	 			 	
	 	   	 	 			 }
	 	   	 	 			 if((ratio*100)<=40 && a==1)
	 	   	 	 			 { 
	 	   	 	 			 	a=0;
	 	   	 	 			 	$(".h_name").fadeOut();
	 	   	 	 			 	$(".name").fadeIn();
	 	   	 	 			 	$(".desc").fadeIn();
	 	   	 	 			 	//$("#name").switchClass("h_name","name");
	 	   	 	 			 	
	 	   	 	 			 }
	 	   	 	 			 if((ratio*100)>90 && b==0)

	 	   	 	 			 {	 	b=1;
	 	   	 	 			 		$("#bgimg").css("opacity","0");
	 	   	 	 			 	 	$("#head_i").css({
	 	   	 	 			 	 		position:'fixed',
	 	   	 	 			 	 		height:'60px',			 	 		
	 	   	 	 			 	 		opacity:'0.7'});
	 	   	 	 			 	 	$("#nav_wrapper").css({
		 	   	 	 			 	 	left:"360px" , bottom:"10px"
		 	   	 	 			 	 });	
	 	   	 	 			 }
	 	   	 	 			if((ratio*100)<=90 && b==1)

	 	   	 	 			 {	 	b=0;
	 	   	 	 			 		//$("#bgimg").css("opacity","1");
	 	   	 	 			 	 	$("#head_i").css({
	 	   	 	 			 	 		position:'absolute',
	 	   	 	 			 	 		height:'100%', 			 	 		
	 	   	 	 			 	 		opacity:'1'});
	 	   	 	 			 	 	$("#nav_wrapper").css({
		 	   	 	 			 	 	left:"95px" , bottom:"0px"
		 	   	 	 			 	 });	
	 	   	 	 			 }
	 	 	 	 }//scroll events function ends here
	 	   	 	 $(window).load(function(){
	 	   	 	 	scrollevents();
	 	   	 	 		$(window).scroll(function(){
	 	   	 	 			scrollevents();
	 	   	 	 		}); 	   	 	 	
	 	   	 	 });
	 	  </script>
	 	  <!--script for loader -->
	 	  <script>
	 	  	//code for "done loading state"
	 	  	function doneLoading(){
	 	  		loadvar=1;
	 	  		//$("#left").animate({left:'-200%'},2000);
				//$("#right").animate({right:'-200%'},2000);
				$("#left").animate({width:'0'},1000);
				$("#right").animate({width:'0'},1000);
				$("#load").fadeOut();
				$("#load_text").fadeOut();
			}
			function startLoading(){
	 	  		//$("#left").animate({right:'200%'},2000);
				//$("#right").animate({left:'200%'},2000);
				$("#left").animate({width:'100%'},1000);
				$("#right").animate({width:'100%'},1000);
				$("#load").fadeIn(2000);
				$("#load_text").fadeIn(2000);
			}	
	 	  	//code for "loading..." part
	 	  	 	var counter=0;
		 	 	var rem=0;
		 	 	var loadvar=0;
				setInterval(function(){
					if(loadvar==0){
					counter++;
					rem=counter%4;
					if (rem==0){$("#load_text").text("Loading");}
					else if (rem==1){$("#load_text").text("Loading.");}
					else if (rem==2){$("#load_text").text("Loading..");}
					else if (rem==3){$("#load_text").text("Loading...");}}
				},500);
			//code for "loading..." part ends here---	
			$(window).resize(function(){
		 		wH= $(window).height();
	 	 		$("#slider").height(wH-60);

			});
			function scrollto100(url,divid){
  					
  					event.preventDefault();
  					
  					$('html, body').animate({
        		scrollTop: $('#' + divid).offset().top
      			}, 400, function(){//callback
   
        				window.location.hash = divid;
        				 if(divid=="card2"){call_slider(url,1);}
      				});
    		
  			}
			function call_slider(url,d) {
				k=1;
			if(d==1){
			 $("#goback").fadeIn();	
			 $("#slider").fadeIn();
    		 $("body").css({'overflow-y' : 'hidden'});	
   			 $("#slider").animate({left:"-2"},500);
   			 var $iframe = $('#slider');
    			if ( $iframe.length ) {
       		 		$iframe.attr('src',url);   
       				return (false);
   			 	}
   			 return (true);}
   			 else { scrollto100(url,"card2"); e=1; }
			}

			function subfunction_close(){
				if(e==1){e=0; scrollto100(null,'card1')}
				var $iframe = $('#slider');
    			if ( $iframe.length ) {
       		 		setTimeout(function() {$iframe.attr('src',"sl_load.html");},1000);   
       				return (false);
   			 	}
   			 return (true);
			}
			function close_slider() {
				k=0
			 $("#goback").fadeOut();
			 $("#slider").animate({left:"100%"});	
    		 $("body").css({'overflow-y' : 'scroll'});	
   			 $("#slider").fadeOut(500,subfunction_close());
   			 //change animations
			}
			
			/*function call_slider(url){
				$("#slider").attr("src",url);
				$("#slider").animate({left:"0"},3000);

			}*/
	 	  </script>
	 	 <style>
	 	 /*CSS for loader*/
	 	 	#left{
  				position: fixed;
    			top: -50%;
    			left: -45%;
    			height: 200%;
   				width: 100%;
    			transform: rotate(-15deg);
    			background-color:rgb(58, 58, 58);
    			box-shadow: black 0px 0px 50px;
    /*-webkit-transition: transform 1s,left 1s,top 1s;*/
			}
			#right{
			    position: fixed;
    			bottom: -50%;
    			right: -55%;
    			height: 200%;
    			width: 100%;
    			transform: rotate(-15deg);
    			background-color: rgb(99, 100, 99);
    			box-shadow: black 0px 0px 50px;
			}

			#load{
				position:fixed;
				height:30%;
				right:100px;
				top:100px;
			}
			#load_text{
				font-family: 'Open Sans', sans-serif;
				color:#FFFFFF;
				position:fixed;
				font-size:58px;
				bottom:50px;
				left:50px;
			}
	 	 	/*CSS for loader ends here*/
	 	 
	 	 </style>
	 	 <script>
	 	 $(window).load(function(){
	 	 	//hash function start
	 	 	var hash = window.location.hash;
	 	 	if(hash){ 
	 	 		$(".card *").fadeIn(100);
	 	 		$("#bt3,#gallery_button,#bt1,#otc_title,#otc_wrapper,#otc_list").fadeIn(100);
	 	 	}
	 	 	//hash function ends	
	 	 	var t1=0,t2=0,t3=0,t4=0,t5=0;
	 	 	$(window).scroll(function(){
	 var top = $(document).scrollTop();
	 var he=$(window).height();
	 he1=he*2;
	 he2=he*3;
	 he3=he*4;
	 he4=he*5;
	 he5=he*6;
	 //code for scroll position conditions to change bg of header
	 if(top>0 && top<he1){$("#head_i").css('background','#322348');}
	 else if(top>he1 && top<he2){$("#head_i").css('background','#322348');}
	 else if(top>he2 && top<he3){$("#head_i").css('background','#000000');}
	 else if(top>he3 && top<he4){$("#head_i").css('background','#16123c');}
	 else if(top>he4 && top<he5){$("#head_i").css('background','#542222');}
	 else{$("#head_i").css('background','#0c402a');}
	 //code for fading in content after focus(depriciated algorith)
	 if(top>(he*0.55) && t1==0){t1=1;$("#snippet_title,#latest_snippet").fadeIn(500,function(){$("#snippet_desc,#bt1").fadeIn(500);});}
	 else if(top>(he + he*0.55) && t2==0){t2=1;$("#work_title").fadeIn(500,function(){$("#work_desc,#bt3").fadeIn(500);});}
	 else if(top>(he1 + he*0.55) && t3==0){t3=1;$("#otc_title").fadeIn(500,function(){$("#otc_list").fadeIn(500);});}
	 else if(top>(he2 + he*0.55) && t4==0){t4=1;$("#gallery_header").fadeIn(500,function(){$("#gallery_button").fadeIn(500);});}
	 else if(top>(he3 + he*0.55) && t5==0){t5=1;$("#webpresence_head").fadeIn(500,function(){$("#social_wrapper").fadeIn(500);});}

});
	 	 	$("#bt1").mouseenter(function(){ 	
  					$('html, body').animate({scrollTop: $(window).height()}, 400);});
	 	 	
	 	 	var wH= $(window).height();
	 	 	$("#slider").height(wH-60);

	 	 	//alert('slider_height='+$("#slider").height());
	 	 	
	 	 	 $("a").on('click', function(event) {
	 	 	 	if(k==1){ close_slider();}
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
  			 });

  		 	 	//next part
  			
	 		// $("#nav4").mouseenter(function(e){ 
	 		 //	var Xco=$("#nav4").css("left");//tooltip move:!!!!!!!!!!!!!11not working
	 		 //	$(".tooltip").css("left",Xco);
	 				/*var offset =$(window).offset();
	 				var Xco=(e.pageX -offset.left);
	 				var Yco=(e.pageX -offset.top);
	 				$(".tooltip").css("top",Yco);
	 				$(".tooltip").css("left",Xco);
	 				$(".tooltip").fadeIn();*/
	 		// }); 	
	 		
	 		$("#goback").click(function(){ close_slider(); });
	 		$(".h_name").click(function(){ window.location="#card1"; close_slider();});
	 }); //window.load closing brackets

	 	 </script>
	 </head>
	 <body>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Dancing+Script' rel='stylesheet' type='text/css'>
	  <!-- cards begin -->
	  <div class="card" id="card1"><!--void! homepage.--></div>
	  <div class="card" id="card2"><!-- snippet-->
	  <div id="snippet_wrapper">
	  <h1 id="snippet_title">Snippet!</h1>
	  <h4 id="snippet_desc">My own micro(and at times macro) Blog<br>Built from scratch by me! </h4>
	  <div id="bt1" class="button" onclick="call_slider('./snippet/index.php',1)">Get There!</div>
	  </div>
	  <div id="latest_snippet"><center><h2 id="latest_title"><br><br><br>Latest "Snippets"</h2><hr></center></div>
	  </div>
	  <div class="card" id="card3"><!-- work -->
	  	<div id="work_wrapper">
	  		<div id="work_title"><h1>Projects</h1></div>
	  		<div id="work_desc" ><h4>A portfolio of past and present <br>projects.</h4></div>
	  		<div class="button" id="bt3" onclick="call_slider('./about/index.php#fourthhead',1)">See them-></div>
	  	</div>
	  </div>
	  <div class="card" id="card4"><!-- OTC-->
	  		<div id="otc_wrapper">
	  		<h1 id="otc_title">Stuff other than coding...</h1>
	  		<h4 id="otc_desc"></h4>
	  		<h2 id="otc_list">
	  			<ul type="circle">
	  				<li>Photography  <a id="photo" onclick="call_slider('./gallery/index.php',1)">&nbsp;|&nbsp; View my Photography portfolio</a></li>
	  				<li>Cycling</li>
	  				<li>Badminton</li>
	  				<li>Listening to music!</li>
	  			</ul>
	  		</h2>
	  		<!-- div class="button" id="bt4">There!</div -->

	  		</div>
	  </div>

	  <div class="card" id="card5"><!-- Gallery-->
	    <H1 align="center" id="gallery_header">#Gallery</H1>
	    <center><div class="button" id="gallery_button" onclick="call_slider('./gallery/index.php',1)">View the gallery</div></center>
	    <!--take aspect ratio of text with height and make the text to occupy full of the width OR find an alternative way to accomplish the same task-->
	  
	  </div>
	  <div class="card" id="card6"><!-- Web Presence -->
	  <center>
	  		<h1 id="webpresence_head">Web Presence</h1>
	  
	  <hr>
	  	<div id="social_wrapper">
	  		<div id="before">
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
	  			
	  			<h2 >Message me! :</h2><br><left>
	  			<input id="nameholder" class="contact" type="text" name="name" data="Name" value="Name" width="200px" ><br>
	  			<input id="emailholder" class="contact" type="text" name="email" data="email" value="email" width="200px" \><br>
	  			<textarea id="messageholder" class="contact" name="message" data="--Your message goes here--" cols="40" rows="5">--Your message goes here--</textarea><br>
	  			<input id="submitholder" type="submit" value="Send!" style="position:relative;left:0"></left>
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
	  	</div>
	  	</center>
	  </div>
	  <!-- cards end -->
	  <!--Slider begins-->
	 <!-- use attribute "srcdoc" later(due to compatibility problems, only HTML5 attribute) and get html contents using AJAX-->
	  <iframe src="sl_load.html" height="100%" width="100%" id="slider"></iframe>
	  
	  <!--slider ends-->
	  <!-- head begin -->
	  <!-- head containing landing intro-->
	  <!--remember to fade bg with scroll to blue-->
	  	  <div id="head_i"><div id="bgimg"></div>
	  	   	 	 <div class="h_logo">
	  	   	 	 </div>
	  	   	 	 <div class="name" ><h1><i>Tameesh Biswas</i></h1>
	  	   	 	 </div>
	  	   	 	 <div class="h_name">Tameesh Biswas
	  	   	 	 </div>
	  	   	 	 <div class="desc"><h4>Programming, Computer Science and Physics lover ♥ </h4><div class="button" id="bt2" onclick="call_slider('./about/index.php',0)">Know more</div>
	  	   	 	 </div>

	  	   	 	 <!--navigation start-->
	  	   	 	 <div id="nav_wrapper">
	  	   	 	 	 <a href="#card1" ><div class="nav_items" id="nav1">Home</div> </a>
	  	   	 	 	 <a href="#card2" ><div class="nav_items" id="nav2">Snippet!</div></a>
	  	   	 	 	 <a href="#card3"><div class="nav_items" id="nav3">Code</div></a>
	  	   	 	 	 <a href="#card4"><div class="nav_items" id="nav4">OTC</div></a>
	  	   	 	 	 <a href="#card5"><div class="nav_items" id="nav5">Gallery</div></a>
	  	   	 	 	 <a href="#card6"><div class="nav_items" id="nav6">Web presence</div></a>
	  	   	 	 </div>
	  	   	 	 <!--navigation end-->
	  	  </div>
	  	  <div id="goback">

	  	  </div>
  	  <!-- head end -->
	     
	  </div>
	 <!--HTML part for loader-->
	 <div id="left"></div>
	 <div id="right"></div>
	 <div id="load_text">Loading</div>
	 <img src="301.gif" id="load">

	 <!--HTML part for loader ends here-->
	  <script type="text/javascript">
		<!--
		if (screen.width <= 699) {
		document.location = "mobile.php";
		}
		//-->
	</script>
	  <script>
	  function hidestuff(){$("#bt3,#gallery_button,#bt1,#otc_title,#otc_list").hide();}
	  $(window).load(function(){

	  	 var top = $(document).scrollTop();
	 	 var he=$(window).height();
	 	 var hash= window.location.hash;
	 	 
			 if(top<he){hidestuff();}	  	
	  		 else{$(".card *").fadeIn(100);}

	  	doneLoading();
	  });
	  </script>
	   <script type="text/javascript">
		<!--
		if (screen.width <= 699) {
		document.location = "mobile.php";
		}
		//-->
	</script>
	  <!--googley analytics-->
	  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79435008-1', 'auto');
  ga('send', 'pageview');

</script>
	  
	 </body>
</html>
