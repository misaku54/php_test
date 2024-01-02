<?php
$globalVariable = 'グローバル変数です';

function checkScope(){
  $localVariable = 'ローカル変数です';
  global $globalVariable; // グローバル変数を関数内で使う時に使用する　ほとんど使わない。
  echo $globalVariable;
  echo '<br>';
  echo $localVariable;
  echo '<br>';
}

echo $localVariable; // 出力されないNULL
echo '<br>';
echo $globalVariable;
echo '<br>';
echo checkScope() // 関数経由ではローカル変数を呼び出せる。
?>