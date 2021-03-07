<?php
$blood = "O";
switch($blood){
  case 'A';
    print "A型です";
    break;
  case "B";
  print "B型です";

  case "C";
  print "C型です";
 
  case "AB";
  print "AB";
  break;

  default:
  echo "a/b/c/abの中から選択してください";
}
?>