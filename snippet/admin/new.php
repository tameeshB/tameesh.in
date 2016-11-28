<?php
session_start();
if(isset($_GET['edit'])){$file = file_get_contents('../'.$_GET['edit'].'/index.txt', true);$file2 = file_get_contents('../'.$_GET['edit'].'/sum.txt', true);}
if(!isset($_SESSION['key'])){exit();}
include('../../gen.php');
$con = mysqli_connect($servername,$username,$password,$dbname);
$ipaddr=$_SERVER['REMOTE_ADDR'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT `key`,`id` FROM `access` WHERE (`ip`='".$ipaddr."' AND `en`= 1 ) ORDER BY `id` DESC LIMIT 1";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
    { $key=$row[0];
   	 
    }
   		if($_SESSION['key']!=$key){
	exit();
  }

}
if(isset($_GET['edit'])){
$sqlo = "SELECT `long`,`index`,`date`,`month`,`year`,`url`,`title`,`time`,`hpage` FROM `posts` WHERE `url`='".$_GET['edit']."' ";
if ($resulto=mysqli_query($con,$sqlo))
  {
  // Fetch one and one row
    while ($rowo=mysqli_fetch_row($resulto))
    { $long=$rowo[0];
       $indexno=$rowo[1];
       $datevar=$rowo[2];
       $monthvar=$rowo[3];
       $yearvar=$rowo[4];
       $urlvar=$rowo[5];
       $titlevar=$rowo[6];
       $timevar=$rowo[7];
       $featured=$rowo[8];
    }

}
}else{
 $sqlo = "SELECT `index` FROM `posts` ORDER BY `index` DESC LIMIT 1";
if ($resulto=mysqli_query($con,$sqlo))
  {
  // Fetch one and one row
    while ($rowo=mysqli_fetch_row($resulto))
    { 
       $indexno=$rowo[0] + 1;
    }

} 
}

?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Dancing+Script' rel='stylesheet' type='text/css'>
<script>
$.fn.EnableInsertAtCaret = function() {
$(this).on("focus", function() {        $(".insertatcaretactive").removeClass("insertatcaretactive");
     $(this).addClass("insertatcaretactive");
});
};
 function savefn(){
    if($("#long").is(":checked")){
                $longch=1;
            }
            else if($("#long").is(":not(:checked)")){
                $longch=0;
            }
   if($("#featured").is(":checked")){
                $featch=1;
            }
            else if($("#featured").is(":not(:checked)")){
                $featch=0;
            }         

    $.post("add.php?action=<?PHP if(isset($_GET['edit'])){echo 'edit';}else{echo 'new';} ?>",
    { 
        url: $("#url").val(),
        index :<?PHP echo $indexno ;?>,
        title: $("#maintitle").val(),
        date: $("#date").val(),
        month: $("#month").val(),
        year: $("#year").val(),
        time: $("#time").val(),
        hpage: $featch,
        long: $longch,
        tags: $("#tags").val(),
        indextxt: $("#indexp").val(),
        sumtxt: $("#sumarea").val()
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
        if(status=='success'){
         <?PHP if(!isset($_GET['edit'])){echo ' window.location="new.php?edit="+$("#url").val();  ';}?>
        }
    });

 }
 
function InsertAtCaret(myValue) {
 
    return $(".insertatcaretactive").each(function(i) {
        if (document.selection) {
            //For browsers like Internet Explorer
            this.focus();
            sel = document.selection.createRange();
            sel.text = myValue;
            this.focus();
        } else if (this.selectionStart || this.selectionStart == '0') {
            //For browsers like Firefox and Webkit based
            var startPos = this.selectionStart;
            var endPos = this.selectionEnd;
            var scrollTop = this.scrollTop;
            this.value = this.value.substring(0, startPos) + myValue + this.value.substring(endPos, this.value.length);
            this.focus();
            this.selectionStart = startPos + myValue.length;
            this.selectionEnd = startPos + myValue.length;
            this.scrollTop = scrollTop;
        } else {
            this.value += myValue;
            this.focus();
        }
    })
}
</script>
<script>
$(window).ready(function(){
  $("textarea").EnableInsertAtCaret();
  $("#url").EnableInsertAtCaret();
   $('#url').bind("replacespace",function(e){
   InsertAtCaret('-');
});
  $('textarea').bind("enterKey",function(e){
   InsertAtCaret('<br>');
});

  $('textarea').bind("title",function(e){
   InsertAtCaret('<h1></h1>');
});
  $('textarea').bind("head",function(e){
   InsertAtCaret('<h2></h2>');
});
  $('textarea').bind("boldpara",function(e){
   InsertAtCaret('<p><b> </b></p>');
});
  $('textarea').bind("hilight",function(e){
   InsertAtCaret('<mark></mark>');
});
  $('textarea').bind("abbrev",function(e){
   InsertAtCaret("<abbr title=''></abbr>");
});
  $('textarea').bind("quote",function(e){
   InsertAtCaret('<blockquote><p></p><footer></footer></blockquote>');
});
  $('textarea').bind("defn",function(e){
   InsertAtCaret('<dl><dt></dt><dd>- </dd></dl>');
});
  $('textarea').bind("code",function(e){
   InsertAtCaret('<code></code>');
});
  $('textarea').bind("longcode",function(e){
   InsertAtCaret('<pre></pre>');
});
  $('textarea').bind("resimg",function(e){
   InsertAtCaret("<img class='img-responsive' src='' alt='' width='100%' >");
});
  $('textarea').bind("leftimg",function(e){
   InsertAtCaret("<img style='float:left;width:200px;height:200px; margin-right:10px;' src='' />");
});
  $('textarea').bind("rightimg",function(e){
   InsertAtCaret("<img style='float:right;width:200px;height:200px; margin-right:10px;' src='' />");
});
  $('textarea').bind("hrule",function(e){
   InsertAtCaret("<hr width='70%'>");
});
  $('textarea').bind("rembed",function(e){
   InsertAtCaret("<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src=''></iframe></div>");
});
  $('textarea').bind("glyph",function(e){
   InsertAtCaret("<span class='glyphicon glyphicon-'></span>");
});
  $('#url').keydown(function(e){
    if(e.keyCode==32)
    { e.preventDefault();
        $(this).trigger("replacespace");
    }
  });
$('textarea').keydown(function(e){
  
    if(e.shiftKey  == true && e.keyCode==13)
    {
        $(this).trigger("enterKey");
    }
    else if(e.altKey  == true && e.keyCode==84){
      e.preventDefault();
      $(this).trigger("title");
    }
    else if(e.altKey  == true && e.keyCode==72){
      e.preventDefault();
      $(this).trigger("head");
    }
    else if(e.altKey  == true && e.keyCode==80){
      e.preventDefault();
      $(this).trigger("boldpara");
    }
    else if(e.altKey  == true && e.keyCode==76){
      e.preventDefault();
      $(this).trigger("hilight");
    }
    else if(e.altKey  == true && e.keyCode==86){
      e.preventDefault();
      $(this).trigger("abbrev");
    }
    else if(e.altKey  == true && e.keyCode==81){
      e.preventDefault();
      $(this).trigger("quote");
    }
    else if(e.altKey  == true && e.keyCode==68){
      e.preventDefault();
      $(this).trigger("defn");
    }
    else if(e.altKey  == true && e.keyCode==67){
      e.preventDefault();
      $(this).trigger("code");
    }
    else if(e.altKey  == true && e.keyCode==77){
      e.preventDefault();
      $(this).trigger("longcode");
    }
    else if(e.altKey  == true && e.keyCode==73){
      e.preventDefault();
      $(this).trigger("resimg");
    }
    else if(e.shiftKey  == true && e.keyCode==76){
      e.preventDefault();
      $(this).trigger("leftimg");
    }
    else if(e.shiftKey  == true && e.keyCode==82){
      e.preventDefault();
      $(this).trigger("rightimg");
    }
    else if(e.altKey  == true && e.keyCode==85){
      e.preventDefault();
      $(this).trigger("hrule");
    }
    else if(e.altKey  == true && e.keyCode==69){
      e.preventDefault();
      $(this).trigger("rembed");
    }
     else if(e.ctrlKey  == true && e.keyCode==83){
      e.preventDefault();
      savefn();
    }
    else if(e.altKey  == true && e.keyCode==71){
      e.preventDefault();
      $(this).trigger("glyph");
      window.open('http://www.w3schools.com/bootstrap/bootstrap_ref_comp_glyphs.asp');
    }
    
});
   
$("#submitbtn").click(function(){
  savefn();
});
$(".glyph").click(function(){ window.open('http://www.w3schools.com/bootstrap/bootstrap_ref_comp_glyphs.asp'); });
  
});
</script>
</head>
<body>
<div class="container">
<h1>New Post <?PHP echo $indexno; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Title&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" id="maintitle" width='7000px' <?PHP if(isset($titlevar)){echo 'value="'.$titlevar.'" ';}?> ></input></h1>
  <div class="row">
    <div id="" class="col-md-1 col-md-offset-0" style="position:fixed;left:0">
        <button data="<br>" class="btn actionbtn btn-block btn-info btn-xs" style="">Break line</button>
        <button data="<h1></h1>" class="btn h1 actionbtn btn-block btn-info btn-xs">Ti<u>t</u>le</button>
        <button data="<h2></h2>" class="btn actionbtn btn-block btn-info btn-xs"><u>H</u>2</button>
        <button data="<p><b> </b></p>" class="btn actionbtn btn-block btn-info btn-xs">Bold <u>p</u>aragraph</button>
        <button data="<mark></mark>" class="btn actionbtn btn-block btn-info btn-xs" style="">Hi<u>l</u>ight</button>
        <button data="<abbr title=''></abbr>" class="btn actionbtn btn-block btn-info btn-xs" style="">Abbre<u>v</u>iation</button>
        <button data="<blockquote><p></p><footer></footer></blockquote>" class="btn actionbtn btn-block btn-info btn-xs" style=""><u>Q</u>uote</button>
        <button data="<dl><dt></dt><dd>- </dd></dl>" class="btn actionbtn btn-block btn-info btn-xs"><u>D</u>efinition</button>
        <button data="<code></code>" class="btn actionbtn btn-block btn-info btn-xs"><u>c</u>ode</button>
        <button data="<pre></pre>" class="btn actionbtn btn-block btn-info btn-xs"><u>M</u>ultiple code lines </button>
        <button data="<img class='img-responsive' src='' alt='' width='100%' >" class="btn-xs btn actionbtn btn-block btn-info">Responsive <u>I</u>mage</button>
        <button data="<img style='float:left;width:200px;height:200px; margin-right:10px;' src='' />" class=" btn-xs btn actionbtn btn-block btn-warning"><u>l</u>eft image</button>
        <button data="<img style='float:right;width:200px;height:200px; margin-right:10px;' src='' />" class="btn btn-xs actionbtn btn-block btn-info"><u>R</u>ight image</button>
        <button data="<hr width='70%'>" class="btn actionbtn btn-block btn-warning btn-xs">Horizontal r<u>u</u>le</button>
        <button data="<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src=''></iframe>
  </div>" class="btn btn-xs actionbtn btn-block btn-info"><u>E</u>mbed</button>
        <button data="<span class='glyphicon glyphicon-'></span>" class="btn btn-xs glyph actionbtn btn-block btn-info"><u>G</u>lyphicon</button>
        <!--<button data="" class="btn btn-xs actionbtn btn-block btn-info"></button>-->

    </div>

    <textarea class="col-md-8 col-md-offset-1" id="indexp" style="height:80%"><?PHP if (isset($file)){ echo $file;} ?></textarea>
    <div class="col-md-3 col-md-offset-9" style="position:fixed;right:0;"><!-- -->
      <input type="text" id="url" <?PHP if(isset($urlvar)){echo 'value="'.$urlvar.'" ';}?>  style="margin-right:10px;width:350px"></input><br>Time:
      <input type="text" id="time" <?PHP if(isset($timevar)){echo 'value="'.$timevar.'" ';}?>  style="margin-right:10px;width:100px"></input><br>
      Date:
      <input type="text" id="date" <?PHP if(isset($datevar)){echo 'value="'.$datevar.'" ';}?> style="margin-right:10px;width:30px"></input>
      <input type="text" id="month" <?PHP if(isset($monthvar)){echo 'value="'.$monthvar.'" ';}?> style="margin-right:10px;width:30px"></input>
      <input type="text" id="year" <?PHP if(isset($yearvar)){echo 'value="'.$yearvar.'" ';}?> style="margin-right:10px;width:50px"></input><br>
      Tags:<input type="text" id="tags"  style="margin-right:10px;width:100px"></input><br>
      <input id="long" type="checkbox" <?PHP if(isset($long)){if($long==1){echo 'checked';}} ?>>Long?</input><br>
      <input id="featured" type="checkbox" <?PHP if(isset($featured)){if($featured==1){echo 'checked';}} ?>>Featured?</input><br>
      <button id="submitbtn" class="btn btn-warning">Save</button>
      <br>Existing tags:<br>
      <?PHP 
        $queryn = "SELECT `tag` FROM `tags` ORDER BY `tag`";
        if ($resultw=mysqli_query($con,$queryn))
         { $prev='';
          // Fetch one and one row
            while ($roww=mysqli_fetch_row($resultw))
               { 
                  if($roww[0]!=$prev){
                    echo $roww[0].'<br>';
                    $prev=$roww[0];
                  }
                }
          }
      ?>
    </div>
  </div>
  <div class="row">
  <textarea class="col-md-8 col-md-offset-1" id="sumarea" style="height:20%"><?PHP if (isset($file2)){ echo $file2;} ?></textarea><br><br><br><br><br><br><br><br>
  </div>
  
</body>
</html>