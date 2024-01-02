<?php
$height = 90;
var_dump($height);

// 左比較したい変数
if ($height == 90){
  echo '身長は' . $height . 'cmです';
}

if ($height === '90'){
  echo '身長は' . $height . 'cmです';
}

// == 一致
// === 型も一致 なるべくこっちつかう
?>