<html>
<head>
  <script src="jquery.min.js"></script>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="bootstrap.min.js"></script>
<script>
$(window).load(function(){ var counter=1;
						   var l_counter=0;
	function go(url){
	 	  		 	window.open(url,'_blank');
	 	  		 	
	 	  		 };
	 	  		 $("#addmore").click(function(){
	 	  		 	counter++;
	 	  		 	
	 	  		 	$("#form").append('<input type="text" id="ur'+counter+'" class="urlp" style="width:80%">');
	 	  		 });
	 	  		 $("#saveit").click(function(){
	 	  		 	$.post("resume/create.php?name="+$("#name").val(),
  						  { 
  						nam:counter,
      				    ur1: $("#ur1").val(),
      				    ur2: $("#ur2").val(),
      				     ur3: $("#ur3").val(),
      				      ur4: $("#ur4").val(),
      				      ur5: $("#ur5").val(),
      				      ur6: $("#ur6").val(),
      				      ur7: $("#ur7").val(),
      				      ur8: $("#ur8").val(),
      				      ur9: $("#ur9").val(),
      				      ur10: $("#ur10").val(),
      				      ur11: $("#ur11").val(),
      				      ur12: $("#ur12").val(),
      				      ur13: $("#ur13").val(),
      				      ur14: $("#ur14").val(),
      				      ur15: $("#ur15").val(),
    					},
   						 function(data, status){
       					 alert("Data: " + data + "\nStatus: " + status);
        				
    					});
	 	  		 });
});
</script>
</head>
<body>
<div id=""  class="container-fluid">
<div class="row"><button id="saveit" style="position:absolute;right:0">Save!</button>
<form class="col-md-9 col-md-offset-1" id="form"><br>
	<input type="text" id="name"  value="name" style="width:40%">
	<input type="text" id="ur1" class="urlp" style="width:80%">
</form>
<button id="addmore">Add</button>
</div>
</div>
</body>
</html>