<?php 
session_start();

$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

$xml = simplexml_load_string(str_replace('&#13;', '', file_get_contents('data.xml')));
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="spots.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SANTA CRUZ</title>
    </head>
<body>
    <div class="backround1">
        <div class="container">
             <div class="row">
                 <img src="imgspot/b1.jpg" class="imgrow">
              </div>
             <div class="row">
                 <img src="imgspot/b2.jpg" class="imgrow">
             </div>
             <div class="row">
                 <img src="imgspot/b3.jpg" class="imgrow">
             </div>
             <div class="row">
                 <img src="imgspot/b4.jpg" class="imgrow">
             </div>
        </div>
     
    </div>
    
    <?php foreach($xml->stacruz as $stacruz) { ?>
       <div class="STA-CRUZ">
           <h1><?php echo $stacruz->welcome;?></h1>
       </div>
       <div>
          <h1 class="l1"><?php echo $stacruz->polo->description->l1;?></h1>
       </div>
    <?php } ?>
</body>
</html>