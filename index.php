<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portraits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="portraits.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="p2.css">
    
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="BOX">
                <div class="logo-wrapper">
                    <a class="logo" href="https://www.instagram.com/avinash_cc/"> <strong> </strong>  <i class="fab fa-instagram"></i> AVINASH-CC</a>
                </div>
            </div>
    
            <ul class="navbar-links">
                <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="random.html">Random</a></li>
                <li class="nav-item"><a class="nav-link" href="nature.html">Nature</a></li>
                <li class="nav-item"><a class="nav-link" href="video.html">Video</a></li>
            </ul>
        </div>
    </nav>

    <div class="header">
        <div class="ccontainer">
            <div class="box">
                <h1 class="">PORTRAITS</h1>
                    
            </div>

        </div>
    </div>  

   
     
        <div class="myGallery">
        
            <?php 
            $dir ="gallery/"; // image folder name
              if (is_dir($dir)){
                 if ($dh = opendir($dir)){
                         while (($file = readdir($dh)) !== false){
                            if($file=="." OR $file==".."){} else { 
                      ?>   <!---- its a loop [change the folder name on img path]----->                
                                 <img  style="" src="images/portraits/<?php echo $file; ?"> 
                     <?php
                      }
                     }
                 closedir($dh);
                 }
              } ?>
            
            
        </div>
    
</body>

</html>