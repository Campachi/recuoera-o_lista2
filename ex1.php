<?php
  $i = 0;
  $soma_par=0;
  
  while ($i <= 100) 
  {
     if ($i % 2 == 0) 
     {
        
          $soma_par = $soma_par+$i;
     }
      $i=$i+1;
  }
  echo "a soma dos numeros pares e de: " .$soma_par;

  
?>