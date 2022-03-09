<?php
echo "Les mauvaises variables sont " . '$a! ' . "et " . '$1a';
?>


<?php
$a = 42;
$b = "42";
$c = "Hellow World!";
echo $a . $b . $c;
?>


<?php
  $note_maths = 15;
  $note_francais = 12;
  $note_histoire_geo = 9;
  $moyenne = (($note_maths + $note_francais + $note_histoire_geo) /3);
  echo 'La moyenne est de '.$moyenne.' / 20.';
?>


<?php
  $prix_ht = 50;
  $tva = 20;
  $prix_ttc = ($prix_ht * (1 + $tva/100));
  echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
?>


<?php
$test = 42;

var_dump("$test lol")
?>