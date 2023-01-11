<?php
  echo"<script>localStorage.setItem('seats_count','$seats_count');";
  for($i =0; $i<$seats_count;$i++){
    if($seats[$i]['status_t'] == 'o'){
      $temp=$i+1;
 
      echo "localStorage.setItem('color$temp','');";
    
    }
    if($seats[$i]['status_t'] == 'f'){
      $temp=$i+1;
 
      echo "localStorage.setItem('color$temp','');";
    
    }
    if($seats[$i]['status_t'] == 'r'){
      $temp=$i+1;
 
      echo "localStorage.setItem('color$temp','');";
    
    }
  }
  echo"</script>";
?>
