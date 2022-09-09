<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?> 
<?php  
$ch=$_POST["tab"];
$tab=explode(",",$ch);
  $l=count($tab);
  for( $i=0;$i<$l-1;$i++) 
  {
       for($j=$i+1;$j<$l;$j++) 
      {
             if (intval($tab[$i])>intval($tab[$j]))
          {
              $temp = $tab[$i];
              $tab[$i] = $tab[$j];
              $tab[$j] = $temp;
          }
         }
  }
  for($x = 0; $x < count($tab); $x++) {
    echo $tab[$x];
    echo "<br>";
  }

?><br>
</body>
</html>
