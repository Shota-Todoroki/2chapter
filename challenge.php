<?php
$name = "to";
$pass = 11;

if ($name == "taro" && $pass == "1111") {
  echo "成功しました";
} elseif ($pass!=1111) {
    echo "passが違う"; 
} elseif ($name!="taro"){
    echo "nameが違う";
}
?>