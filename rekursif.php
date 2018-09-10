<?php
function rekursifBintang($p) {
  $p--;
  if ($p > 0)rekursifBintang($p);
	echo "*";
}
function rekursifBintang2($p){
  rekursifBintang($p);
  echo "<br>";
  $p--;
  if($p>0)
    rekursifBintang2($p);
}
	rekursifBintang2(6);

echo "<br>=================================<br><br>";

function rekursifAngka($q, $r){
  echo $q;
    $q++;
  		if($q <=$r)rekursifAngka($q, $r);  
}
function rekursifAngka2($q, $r){
  rekursifAngka(1, $q);
   echo "<br>";
  	$q++;
  		if($q <=$r)rekursifAngka2($q, $r);  
}
rekursifAngka2(1,6);

?>
