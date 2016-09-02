<html>
<head><link rel="stylesheet" href="..\loadercss.css" />
<title></title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="..\uniform.css" />
<link rel="stylesheet" media="only screen and (min-width: 1064px)" href="about.css" />
<meta name="theme-color" content="#16627a">
  <link rel="stylesheet" media="only screen and (min-width: 995px)" href="d.css" />
  <link rel="stylesheet" href="snippet.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Dancing+Script' rel='stylesheet' type='text/css'>
<script>
function scrollto(divid){
  					
  					event.preventDefault();
  					
  					$('html, body').animate({
        		    scrollTop: $('#' + divid).offset().top
      			    }, 400, function(){//callback   
        				window.location.hash = divid;
        				 
      				});
    			
  			}


	   	 	 		 	
</script>
<style>
</style>
<script>
$(window).load(function(){
$("a").on('click', function(event) {
	 window.open($(this).attr('href'));
    return false;
});
 
//script for left position of the main containers
	$("#main_container").height($("#content").height() +40);
	var wd=$(window).width();
		var newwd =(wd*0.5)-332;
		$("#main_container").css('left',newwd);
		$("#content").css('left',newwd);//newwd means new width, width variable edited
	$(window).resize(function(){
		$("#main_container").height($("#content").height() +40);
		var wd=$(window).width();
		var newwd =(wd*0.5)-332;
		$("#main_container").css('left',newwd);
		$("#content").css('left',newwd);
	});
	var width=  $(window).width();
	var height=  $(window).height();
	//script for moving the background pic along with topscroll position
	if(width>height){

	}
	else{}
	//script for setting top of the #bgg to top of elements
	$("#thisone").fadeIn();
	var top = $(document).scrollTop();
	var h2top=$("#secondhead").offset().top;
	var h3top=$("#thirdhead").offset().top;
	var h4top=$("#fourthhead").offset().top;
	 if(top<h2top){if(key!=1){key=1;}}
	 	  else if(top>=h2top && top<h3top){if(key!=2){key=2;}}
	 	  else if(top>=h3top && top<h4top){if(key!=3){key=3;}}
		  else if(top>=h4top && $(document).height()){if(key!=4){key=4;}}
		  	else{if(key!=1){key=1;}}
		  if(key==1){ key=1;$("#thisone").html('&#176;');$("#thistwo,#thisthree,#thisfour").html(''); $("#l_one").css({background:'#68E817',color:'#000000'});$("#l_two,#l_three,#l_four").css({background:'#000000',color:'#FFFFFF'});}
		  else if(key==2){key=2;$("#thistwo").html('&#176;');$("#thisone,#thisthree,#thisfour").html(''); $("#l_two").css({background:'#68E817',color:'#000000'});$("#l_one,#l_three,#l_four").css({background:'#000000',color:'#FFFFFF'})}
		  else if(key==3){key=3;$("#thisthree").html('&#176;');$("#thistwo,#thisone,#thisfour").html(''); $("#l_three").css({background:'#68E817',color:'#000000'});$("#l_two,#l_one,#l_four").css({background:'#000000',color:'#FFFFFF'})}
		  else if(key==4){key=4;$("#thisfour").html('&#176;');$("#thistwo,#thisthree,#thisone").html(''); $("#l_four").css({background:'#68E817',color:'#000000'});$("#l_two,#l_three,#_one").css({background:'#000000',color:'#FFFFFF'})}
		  	else{alert('none');}
	 $(window).resize(function(){
	 		var h2top=$("#secondhead").offset().top;
	        var h3top=$("#thirdhead").offset().top;
			var h4top=$("#fourthhead").offset().top;
	 });
	var key=1;
	var colorvarbg='#000000';
	var colorvarco='#000000';
	$("[type='none'] li").mouseenter(function(){colorvarbg=$(this).css('background');colorvarco=$(this).css('color');$(this).css({background:'#D8620F',color:'#000000'});});
	$("[type='none'] li").mouseleave(function(){$(this).css({background:colorvarbg,color:colorvarco});});
	 $(window).scroll(function(){  
	 	var top = $(document).scrollTop();
	 	//$("#l_one").text(top);
	 	//$("#l_two").text(h2top);
	 	//$("#l_three").text(h3top);
	 	//$("#l_four").text(key);
	 	  if(top<h2top){if(key!=1){key=1;}}
	 	  else if(top>=h2top && top<h3top){if(key!=2){key=2;}}
	 	  else if(top>=h3top && top<h4top){if(key!=3){key=3;}}
		  else if(top>=h4top && $(document).height()){if(key!=4){key=4;}}
		  	else{if(key!=1){key=1;}}
		  if(key==1){ key=1;$("#thisone").html('&#176;');$("#thistwo,#thisthree,#thisfour").html(''); $("#l_one").css({background:'#68E817',color:'#000000'});$("#l_two,#l_three,#l_four").css({background:'#000000',color:'#FFFFFF'});}
		  else if(key==2){key=2;$("#thistwo").html('&#176;');$("#thisone,#thisthree,#thisfour").html(''); $("#l_two").css({background:'#68E817',color:'#000000'});$("#l_one,#l_three,#l_four").css({background:'#000000',color:'#FFFFFF'})}
		  else if(key==3){key=3;$("#thisthree").html('&#176;');$("#thistwo,#thisone,#thisfour").html(''); $("#l_three").css({background:'#68E817',color:'#000000'});$("#l_two,#l_one,#l_four").css({background:'#000000',color:'#FFFFFF'})}
		  else if(key==4){key=4;$("#thisfour").html('&#176;');$("#thistwo,#thisthree,#thisone").html(''); $("#l_four").css({background:'#68E817',color:'#000000'});$("#l_two,#l_three,#_one").css({background:'#000000',color:'#FFFFFF'})}
		  	else{alert('none');}
		  /*if(top<h2top){$("#thisone").fadeIn();alert('one');}
	 	  else if(top>=h2top && top<h3top){$("#thistwo").fadeIn();alert('two');}
	 	  else if(top>=h3top && top<h4top){$("#thisthree").fadeIn();alert('three');}
		  else if(top>=h4top){$("#thisfour").fadeIn();alert('four');}
		  	else{$("#thisone").fadeIn();alert('none');}	
*/
	  });

});
</script>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Dancing+Script' rel='stylesheet' type='text/css'>
</head>
<body><span id="top" ></span><div id="backbg"></div>
<div id="main_container">
</div>
<div id="content"><h1 id="firsthead">
Li'l bit about me!</h1><hr align="left" width="60%">


<h2 id="stitle1">Intro</h2><b>
<p>
Hey!<br>I'm currently a first year student at <a href="http://iitp.ac.in">IIT Patna</a>,<br> pursuing a B.Tech in Computer Science and Engineering <br><!--and NOT just-another-CS-student-->GENUINELY passionate for computer science, programming  and technology.<br>Currently residing in the IIT P campus hostel and originally from <a href="//www.google.co.in/maps/place/Mumbai,+Maharashtra/@19.0821977,72.741118,11z/data=!3m1!4b1!4m5!3m4!1s0x3be7c6306644edc1:0x5da4ed8f8d648c69!8m2!3d19.0759837!4d72.8776559">Mumbai,India</a><br> 
</b></p>

<h2>Schooling</h2><p><b>
High school: <a href="http://iitianspace.com">PACE Junior Science College,Powai</a><br>
Middle and elementary: <a href="http://dpsnavimumbai.edu.in">Delhi Public School, Nerul, Navi Mumbai</a><br>
Early elementary: <a href="http://www.lilavatibaipodarschool.com/">Lilavatibai Podar International School,Mumbai</a><br>
</p></b>

<h2>Hobbies</h2><p><b>
Yes, there are other things I do:
<ul type="square">
<li>Web app development (PHP, MySQL, AJAX, HTML, jQuery, CSS)</li>
<li>Trying out algorithms with Python</li>
<li>Robotics: Playing with code, sensors using with my Arduino !</li>
<li><del>Open Source software Contributions!</del></li>
<li>Photography</li>
<li>Tech Enthusiast</li>
<li>Occational video editing | <a href="//www.youtube.com/c/tameeshbiswas">YouTube</a> | <a href="//www.youtube.com/user/TheFakeDudes">theFakeDudes Youtube</a></li>
<li>I love (listening to) Music!!!</li>
</ul>
</b></p>
<h2>Favourite Quote</h2>
<p><b><blockquote>"The ones who are crazy enough..."</blockquote></b></p>
<h2>Contact:</h2>
<p><b>
	<a href="mailto:me@tameesh.in">me@tameesh.in</a><br>
	<a href="mailto:tameeshb@gmail.com">tameeshb@gmail.com</a><br>
	<a href="//facebook.com/tameeshb">fb.com/tameeshB</a><br>


</b></p>
<br><br><br><br><h1 id="secondhead">
&#9829; for computers.</h1><hr align="left" width="60%">

<h2>How it began</h2>
<p><b>

</b></p>

<h1 id="thirdhead">
Majors & Minors!</h1><hr align="left" width="60%">
<br>
<br>
<blockquote>
	Not started yet!
</blockquote>
<br>
<br>
<h2>MOOCs</h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><h1 id="fourthhead">
Projects</h1><hr align="left" width="60%">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div id="left_panel"><ul type="none" >
	  <li id="l_one" onclick="scrollto('top')">
	  	About <span id="thisone" class="thisn"> </span>
	  </li>
	  <li id="l_two" onclick="scrollto('secondhead')">
	  	&#9829; for computers.<span id="thistwo" class="thisn"> </span>
	  </li>
	  <li id="l_three" onclick="scrollto('thirdhead')">
	  	Majors & Minors!<span id="thisthree" class="thisn"></span>
	  </li>
	  <li id="l_four" onclick="scrollto('fourthhead')">
	  	Projects<span id="thisfour" class="thisn"> </span>
	  </li>
</ul>
	  </div>
<div class="outer"><div class="middle"><div class="inner">
	<center><img src="..\loading.gif"></center>
</div></div></div>
  <script>
  function doneLoading(){
  		$(".outer").fadeOut(2000);
  }
	  $(window).load(function(){
	  	doneLoading();
	  });
	  </script>
</body>
</html>