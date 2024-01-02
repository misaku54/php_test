<?php
// 関数は２種類ある
// 組み込み関数（ビルドイン関数）・・・準備してある関数
// ユーザー定義関数・・・自由に作れる関数

function test(){
  // 戻り値ではないがechoが実行されている。
  echo 'テスト';
}

test();

echo '<br>';

// インプット引数あり
// アウトプット戻り値なし

$comment = 'コメント３';

function getComment($string){
  echo $string;
}

getComment($comment);

echo '<br>';

function getNumberOfComment(){
  return 5;
}

var_dump(getNumberOfComment());
$result = getNumberOfComment();
echo $result;
?>