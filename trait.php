<?php
// rubyでいうモジュールみたいなもの
// クラスと違い単一継承という原則はなく、複数継承可能
// オーバーライドもされる（トレイトのメソッドがクラスのメソッドに上書きされる。）
// 抽象クラス、クラス、インターフェース、トレイトとややこしいのでUMLに残す

trait ProductTrait{
  public function getProduct(){
    echo 'プロダクト';
  }
}

trait NewsTrait{
  public function getNews(){
    echo 'ニュース';
  }
}

class Product{

// useを使うとtraitを持ってくることができる
  use ProductTrait;
  use NewsTrait;

  public function getInformation(){
    echo 'クラスです';
  }

  // traitのメソッドをオーバーライド
  public function getNews(){
    echo 'クラスのメソッドです。';
  }
}

$product = new Product();
$product->getInformation();
echo '<br>';
$product->getProduct();
echo '<br>';
$product->getNews();
echo '<br>';

?>