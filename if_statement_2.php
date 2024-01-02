<?php
$signal = 'blue';

// 書き方はjsと似ている。
if ($signal === 'red'){
  echo 'とまれ';
} else if ($signal === 'yellow'){
  echo '一旦停止';
} else{
  echo '進む';
}

// 可読性のためifネストは避ける　ネストが必要な場合はifを分割すればよい。

?>