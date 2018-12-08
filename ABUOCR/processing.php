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
      <a href="#" class="brand-logo center" style=";font-size:300%;font-family:Neuropol">Reveles</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="font-family:Lobster">
        <li><a href="sass.html">FAQ</a></li>
        <li><a href="badges.html">Help</a></li>
        
      </ul>
    </div>
  </nav>
        </div>
	 </div>
	
	 <div id="body" style="width:100%;position:absolute;height:80%;border:0px solid black;top:15%;text-align:center">
	 
	 
	 <div id="body"  >
	   
    <?php
	   if (file_exists('matlab_engine_started'))
	   {
		   $value='67%';
		   
	   }
	   else if (file_exists('matlab_engine_imported'))  {
		   
		   $value='33%';
	   }
	   else
	   {
		   $value='0%';
	   }
	   ?>
	     <p style="font-family:verdana;font-size:200%;text-align:center;color:#26A69A">
		<?php
	  if ($value=='0%')
	  {
		 echo "Task 0 of 3 completed</p>"; 
		  
	  }
	  else if ($value=='33%')
	  {echo "Task 1 of 3 completed</p>";
	  }
	  
	  else if ($value=='67%')
	  {echo "Task 2 of 3 completed</p>";
	  }
	  ?>
  <div class="progress">
      <div id="loader" class="determinate" style="width:<?php echo $value;?>">
	  
	  </div>
	  
  </div>
	  
	  <p style="font-family:verdana;font-size:200%;text-align:center;color:#26A69A">Image Uploaded.<br>Please wait while the image is being processed.<br>
	
	  <?php
	  if (!file_exists('matlab_called')) {   
		$myfile = fopen("matlab_called", "w");
		echo "<script type=\"text/javascript\">window.open('http://localhost/ABUOCR/Files/imp.py','_blank');</script>";
		}
		if (file_exists('matlab_engine_imported'))
		{
		echo "<p id=\"text\"> Matlab Engine imported.
      <input type=\"checkbox\" id=\"test6\" checked=\"checked\" disabled=\"disabled\" />
      <label for=\"test7\"></label>
  </p>";
		
		}
		
		else
		{
			
			echo "<p id=\"text\"> Importing Matlab Engine.
			 
      <input type=\"checkbox\" id=\"indeterminate-checkbox\" />
      <label for=\"indeterminate-checkbox\"></label>
    </p>";
		}
		if (file_exists('matlab_engine_started'))
		{

		echo "<p id=\"text\"> Matlab Engine started. <input type=\"checkbox\" id=\"test7\" checked=\"checked\" disabled=\"disabled\" />
      <label for=\"test7\"></label></p>";
			
		}
		else
		{
			
			echo "<p id=\"text\"> Starting Matlab engine.
			
      <input type=\"checkbox\" id=\"indeterminate-checkbox\" />
      <label for=\"indeterminate-checkbox\"></label>
    </p>";
		}
	if (file_exists('text_extracted'))
	{
		
		echo "<p id=\"text\">Text extracted. <input type=\"checkbox\" id=\"test7\" checked=\"checked\" disabled=\"disabled\" />
      <label for=\"test7\"></label></p>";
		echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ABUOCR/Files/confirm.php\" />";
		
	}
	else
		{
			
			echo "<p id=\"text\"> Text extracting.
		
      <input type=\"checkbox\" id=\"indeterminate-checkbox\" />
      <label for=\"indeterminate-checkbox\"></label>
    </p>";
		}
	?>
	<!--
	  <script type="text/javascript">
	  window.open('http://localhost/ABUOCR/upload.php');</script>
	 _-->
	 <meta http-equiv="refresh" content="3; url=http://localhost/ABUOCR/Files/processing.php" />
   </div>
	
	 
	 
	 
	 
	
	 
	 
	 </div>
	 <div id="footer" style="width:100%;position:absolute;height:5%;border:0px solid black;top:95%;">
	 
	 
	 
	 </div>
	 </body>
  </html>