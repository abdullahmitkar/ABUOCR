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
	
	body{
	font-family:Lobster;
	<!--background-color:#26A69A;
	-->
	
	background-color:white;}
	@font-face{
font-family:'Lobster';
src:url('Lobster.otf');
}
@font-face{
font-family:'Neuropol';
src:url('Neuropol.ttf');
}
	.inputfile {
	opacity: 1;
	overflow: hidden;
	position: absolute;
	z-index: ;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
 
    display: inline-block;
}

.inputfile:focus + label,
.inputfile + label:hover {
     
}

	
	</style>
	</head>
    <body >
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	 <div id="header" style="width:100%;position:absolute;height:15%;border:0px solid black;top:0%;">
	
	 <div id="navbar" style="position: absolute; top:20%;right:0%;width:100%;height:49%;border:0px solid red;">
	 
	 
	 
	   <nav style="background-color:;">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center" style=";font-size:300%;font-family:Neuropol">Reveles</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="font-family:Lobster">
        
        <li><a href="badges.html">Help</a></li>
        
      </ul>
    </div>
  </nav>
        </div>
	 </div>
	
	 <div id="body" style="width:100%;position:absolute;height:80%;border:0px solid black;top:15%;">
	  <div style="position:absolute;width:60%;left:20%;font-size:200%;">
	 <p>We are sorry for the inconvinience. The image uploading requires Matlab installed.</p>
	 <p>Please enter text to continue</p>
	 </div>
	 
	 
	 
	  
	  
	  <form action="http://localhost/ABUOCR/Files/upload.php" enctype="multipart/form-data" method="post">
    
	  
	    

	  <script>

   var x= document.getElementById("fileupload").value;
	
	document.getElementById("filename2").innerHTML=x;
	 

</script>

    
	
	
	
	  
	  
	  	 
   <div style="position:absolute; width:12%; height:10%;left:43%;top:55%;border:0px solid black;"> 
   <a href="entertext.php"><input class="waves-effect waves-light btn" value="Enter text" type="button"  name="submit" action="entertext.php"/></a></div>
   
   
  </form>
 
	


  
    <p style="position:absolute; bottom:0%;right:1%;font-size:70%;"> * The image must be jpg. <br> * Make sure that the background is as clean as possible.<br>*  Take a clear image in good light. </p>
	 
	 
	 </div>
	 <div id="footer" style="width:100%;position:absolute;height:5%;border:0px solid black;top:95%;">
	 
	 
  
   </div>
 
    </body>
  </html>