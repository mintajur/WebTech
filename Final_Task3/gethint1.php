<?php
// Array with names
$a[] = "Australia";
$a[] = "Bangladesh";
$a[] = "Canada";
$a[] = "Denmark";
$a[] = "Ethiopiya";
$a[] = "Finland";
$a[] = "Germeny";
$a[] = "Hondurus";
$a[] = "India";
$a[] = "Jamaika";
$a[] = "Kuet";
$a[] = "Lebanon";
$a[] = "Nigeria";
$a[] = "Oman";
$a[] = "Papua newgini";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $country) {
    if (stristr($q, substr($country, 0, $len))) {
      if ($hint === "") {
        $hint = $country;
      } else {
        $hint .= ", $country";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>