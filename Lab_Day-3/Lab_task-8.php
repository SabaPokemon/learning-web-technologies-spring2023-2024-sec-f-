<?php

echo "<table cellpadding='0' cellspacing='0' border='1' align='center' width='50%' height='50px'>";

echo "<tr>";
 echo "<td> The array to declear</td>";
 echo "<td> Shapes to print</td>";
echo "<tr>";
echo "<td>";
 for($i=3; $i>=1; $i--)
  {
    for($j=1;$j<=$i; $j++)
    {
        echo $j." ";
    }
    echo "<br>";
  }
  echo "</td>";
  
  echo "<td>";
  echo "<table  cellpadding='0' cellspacing='0' border='1' align='center' width='20%' height='20px'>";
echo "<tr>";
echo "<td>";
for($i=3; $i>=1; $i--)
  {
    for($j=1;$j<=$i; $j++)
    {
        echo $j." ";
    }
    echo "<br>";
  }
  echo "</td>";
 echo "<td>";
 $c='A';
  for($i=0; $i<3; $i++)
  {
    for($j=0;$j<=$i; $j++)
    {
        echo $c." ";
        $c++;
    }
    echo "<br>";
  }
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  echo "</td>";

?>