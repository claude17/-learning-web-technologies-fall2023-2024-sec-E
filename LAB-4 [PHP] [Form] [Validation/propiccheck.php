<?php
   $picture = $_REQUEST["propic"]; 
   $allowedExtensions = array('jpg', 'jpeg', 'png');
   
   $fileInfo = pathinfo($picture);
   $extension = strtolower($fileInfo['extension']);
   
   if (in_array($extension, $allowedExtensions)) {
       echo "Valid picture format: " . $extension;
   } else {
       echo "Invalid picture format: " . $extension;
   }
?>