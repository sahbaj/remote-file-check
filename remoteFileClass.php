<?php
class remoteFileCheck {
      /* Remote files/images exist/not exist check functions */
      function file_exists($url){		  
          $status = @get_headers($url); //http://php.net/manual/en/function.get-headers.php
           if (strpos($status[0], 'OK') !== false) {
			   return true;
		   }
		   else{
			   return false;
			   }
      }      
   }
?>
