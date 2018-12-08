<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
	<style>
	input:hover{
	background-color:#60EBDD;
	color:white;
	animation-duration: 1s;
	}
	input{
	animation-delay:2s;
	}
	body{
	
	background-color:#EE6E73;
	
	
	 }
	@font-face{
font-family:'Lobster';
src:url('Lobster.otf');
}
@font-face{
font-family:'Neuropol';
src:url('Neuropol.ttf');
}
	</style>
	</head>

    <body style="text-align:center;font-size: 225%;">
    <div>
<img class="responsive-img" src="logo.jpg" style="position:absolute;left:0%; ";>
	</div>	
<div style="position:absolute;left:40%; width:50%;height:100%;font-family:Lobster";  >
	 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <div style="top:10%;left:30%;position: absolute;width:40%;"id="header">
	  <p style="text-align:center; font-family:Neuropol;color:white;"> Reveles</p>
	  </div>
	  <div id="pagecaption" style="border:0px solid cyan;position: absolute;top:30%;width:100%;height:30%;">
		<p style="position: absolute; border:0px solid red; width:100%;" >Find source of a document on the internet.</p>
		<p  style="position: absolute; top:50%;border:0px solid red; width:100%;">		Upload picture of the document and search.</p>
		<div>
		<form action="getstarted.php">
		<input style="border:0px solid red; width:40%;height:20%;left:30%;top:150%;position:absolute; border-radius:10px;font-family:Lobster;font-size:79%;background-color:#26A69A;" type="submit" value="Get Started">
		</div></div>
		</div>
	</body>
  </html>