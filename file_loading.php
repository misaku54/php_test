<?php
// require(); require_once();　読み込んだプログラムにエラーが出たらエラーで停止する。onceは一回だけ読み込むという意味
// include(); include_once();　読み込んだプログラムにエラーが出たら続けられる範囲で実行する。
// 他の方法ではnamespaceがあるlaravelはこっちが主流
// クラスをrequireで読み込んでいくのは手間なので、最近の主流はautoloadという仕組みを使ってクラスを自動読み込みできるようにしている。
// composerというツールにはautoloadの仕組みが備わっている。laravelでは必ず使われている。
require 'common.php'; // 文字列で指定

echo $commonVariable;

echo commonTest();
echo '<br>';
echo __DIR__; // 現在のファイルの絶対パスを取得
echo '<br>';
echo __FILE__; // 現在のファイルを含めた絶対パス

?>