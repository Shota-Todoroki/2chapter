<?php
  function getTriangleArea($width,$height,$vertical){
    $area = $width * $height * $vertical;
    print "体積は".$area."です.";
  } 
  getTriangleArea(5,10,8); 
?>