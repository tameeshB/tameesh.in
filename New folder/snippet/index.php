<?php //include('snippet.php');?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="..\loadercss.css" />
  <title>Snippet | Tameesh Biswas</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
 <meta name="theme-color" content="#16627a">
  <link rel="stylesheet" media="only screen and (min-width: 995px)" href="d.css" />
  <link rel="stylesheet" href="snippet.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Dancing+Script' rel='stylesheet' type='text/css'>
<script>
	function newfn(){$("#xsloader").animate({opacity:'1'});$.post("latest.php", function(datan,statusn){$("#main").html(datan);if(statusn=='success'){$("#xsloader").animate({opacity:'0'});}});
                  }
                  <?PHP 
    if(isset($_GET['main'])){
     $phinc= 'singlepostview.php?ref='.$_GET['main'];
    }
    elseif (isset($_GET['num'])) {$phinc='singlepostview.php?id='.$_GET['num'];}
    else {$phinc='latest.php';}

    ?>
$(document).ready(function(){
$.post("<?PHP echo $phinc;?>", function(dataio, status){
        $("#main").append(dataio);
        if(status=='success'){$("#loader_main").fadeOut();}
        });
$.post("datepanel.php", function(dataio, status){
        $("#sidedates").append(dataio);
        if(status=='success'){$("#loader_dates").fadeOut();}
        });
$.post("tags.php", function(dataio, status){
        $("#sidetags").append(dataio);
        if(status=='success'){$("#loader_tags").fadeOut();}
        });
        
$(document).ajaxStart(function() {
    $(document.body).css({'cursor' : 'wait'});
    $("#xsloader").fadeIn();
}).ajaxStop(function() {
    $(document.body).css({'cursor' : 'default'});
    $("#xsloader").fadeOut();
});
    $('[data-toggle="tooltip"]').tooltip(); 
    $('.datepanelbtn').click(function(){
        //alert($(this).attr('data'));//my ajax goes here
         $.post(""+$(this).attr('data')+"/index.txt", function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        $("#main").html(data);
        $("#main").prepend('<div onclick="newfn()" class="btn btn-link" id="backtla" style="cursor:pointer">&laquo; Back to Latest Activity</div><img id="xsloader" style="opacity:0" src="http://tameesh.in/477.gif" height="30px" width="30px"></img><br>');
        });

    });
     $('.tagbtn').click(function(){
        //alert($(this).attr('data'));//my ajax goes here
         $.post("getbytag.php?tag="+$(this).attr('data'), function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        $("#main").html(data);
        $("#main").prepend('<div onclick="newfn()" class="btn btn-link" id="backtla" style="cursor:pointer">&laquo; Back to Latest Activity</div><img id="xsloader" style="opacity:0" src="http://tameesh.in/477.gif" height="30px" width="30px"></img><br>');
        });

    });
    var W_height= $(window).height();
    var newnum=$(document).height()-$(window).height()-100;
    $(window).scroll(function(){
                  var top = $(document).scrollTop();
                  $.post("latest.php?last=", function(data, status){
                  if (top>=newnum){ //$("#main").append(data); scrolled to bottom of document
                   }
                  });
               });
});
</script>
</head>
<body>
<div id="bgimg"></div>
<div class="container-fluid">
<div class="row" id="head" >
  <div class="col-md-6 col-md-offset-1" ><h1 >Snippet!<small><span  data-toggle="tooltip" data-placement="auto" title="The name comes from the phrase: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a 'snippet' of code " class="glyphicon glyphicon-question-sign"></span></small></h1>
  <p><b>My own microblog,built from scratch!</b></p>
  </div>
</div>
  <div class="row">
   
    <div id="main"  class="col-md-7 col-md-offset-3" >
   <img id="loader_main"  src="301.gif" height="100px" width="100px">
    
    
     
    </div><!--end of main container-->
    

     <div id="sidetags" class="col-md-2 col-md-offset-0" ><h2>Tags</h2>
     <img id="loader_tags"  src="301.gif" height="100px" width="100px">
        <?PHP// include('tags.php'); 
        ?>
    </div>


    <div id="sidedates" class="col-md-2 col-md-offset-10">
    <h2>View by date</h2>
    <img id="loader_dates"  src="301.gif" height="100px" width="100px">
      <?PHP// include('datepanel.php'); 
      ?>
    </div>
  </div>
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

