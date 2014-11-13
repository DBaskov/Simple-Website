<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <link rel="stylesheet" href="lastPagesStyle.css" type="text/css">
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <style>
    
    #txtBoxCont {
      position: relative;
      top: 20px;
      width: 100%;
      height: 70px;
      margin: 0px;
    }

    .txtBoxes {
    	background-color:#EEEEEE; 
    	width: 200px; 
    	height: 100%; 
 
    	text-align: center;
    	padding: 15px;
    	border-radius: 8px;
    }

    #txtBox1 {
      
      float: left;
      margin-left: 30px;
    }

    #txtBox2 {
       margin: 0 auto;
    }

    #txtBox3 {
    	position: relative;
        top: -100px;
        float: right;
        margin-right: 30px;
    }
     
  </style>
  </head>
<body>

<div data-role="page" id="FindUs">
	<div id = "bodyContainer">
	<div data-role = "header" id = "headContainer2" class = "ui-content">
    </div>
    <div data-role="navbar">
      <ul>  
        <li><a href="projectb.html" data-icon="home" data-theme = "b" data-ajax="false">Home</a></li>
        <li><a href="calculator.html" data-icon="grid" data-theme = "b" data-ajax="false">Calculator</a></li>
        <li><a href="findUs.php" data-icon="location" data-theme = "b">Find Us</a></li>
      </ul>
    </div>
	<div data-role = "main" id = "para" class = "ui-content">

    <h1 id = "bodyTitle" style = "position: relative; right: -50px;"> Find Us</h1>
    <?php 
    class infoDisp {

         function displayFields() {
           $connection = mysqli_connect("localhost","fires42_denys","StuXAThat5fr","fires42_denys"); 
           if (mysqli_connect_errno()) {
             echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }

           $result = mysqli_query($connection,"SELECT * FROM locations");
    	   if(!$result)
    	   echo "fail";
    	   echo "<div id = 'txtBoxCont'>";
    	   $txtBoxNum = 0;
    	   while($row = mysqli_fetch_array($result)) {
    	   	  $txtBoxNum++;
    	      echo "<div class = 'txtBoxes' id = 'txtBox$txtBoxNum'>".$row[1] . "<br><br>" . $row[2] . " " . $row[3] . " " . $row[4] . " </div>";
    	   }
    	   echo "</div>";
    	}
     }
     
     $obj = new infoDisp();
     $obj->displayFields();
    ?>
    </div>
   </div>
</div>
</body>
</html>