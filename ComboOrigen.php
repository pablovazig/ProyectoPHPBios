<?php
       if ($origen=="Bélgica") {
         echo "<option value='1' selected>Bélgica</option>\n";
         echo "<option value='2'>Holanda</option>\n";
         echo "<option value='3'>Suecia</option>\n"; 
       } else {
         if ($origen=="Holanda") {
         echo "<option value='1'>Bélgica</option>\n";
         echo "<option value='2' selected>Holanda</option>\n";
         echo "<option value='3'>Suecia</option>\n"; 
         } else {
         echo "<option value='1'>Bélgica</option>\n";
         echo "<option value='2'>Holanda</option>\n";
         echo "<option value='3' selected>Suecia</option>\n";   
          } //end if 
?>