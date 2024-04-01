<?php
$array = [
  [1,2,3,'A'],
  [1,2,'B','C'],
  [1,'D','E','F'],
];
echo "<table cellpadding='0' cellspacing='0' border='1' align='center' width='50%' height='50px'>";

echo "<tr align='center' >";
 echo "<td > The array to declear</td>";
 echo "<td> Shapes to print</td>";
echo "<tr>";
echo "<td>";
echo "<table  cellpadding='0' cellspacing='0' border='1' align='center' width='80%' height='20px' style='background-color: #f2f2f2;'>";
 for($i=0; $i<3; $i++)
  {
    echo "<tr align='center'>";
    for($j=0;$j<4; $j++)
    {
      echo "<td>";
      echo $array[$i][$j];
      echo "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
  echo "</td>";
  
  echo "<td>";
  echo "<table  cellpadding='0' cellspacing='0' border='1' align='center' width='80%' height='20px' style='background-color: #f2f2f2;'>";
echo "<tr>";
echo "<td>";
for($i=0; $i<3; $i++)
  {
    for($j=0;$j<3-$i; $j++)
    {
        echo $array[$i][$j]." ";
    }
    echo "<br>";
  }
  echo "</td>";
 echo "<td>";
for($i=0; $i<3; $i++)
  {
    for($j=3-$i;$j<=3; $j++)
    {
        echo $array[$i][$j]." ";
    }
    echo "<br>";
  }
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  echo "</td>";

?>
