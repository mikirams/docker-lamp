<?php
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}

$x = 0;


while($x <= 10) {
    $y = 0;
    while($y <= 10) {
        echo "$x"," x ", "$y", " = ", $x*$y, "<br>";
        $y+=1;
    }
    $x+=1;
}
?>