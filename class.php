<?php

class Product{
  // アクセス修飾子
  // private(外からアクセスできない),protected(自分・継承したクラスのみ使える,public(公開外からアクセスできる何も書かないとこれになる)

  // 変数
  private $product = [];

  // 関数

  function __construct($product){ // クラスを呼び出した初回に起動する関数
    $this->product = $product; // $thisは関数を呼び出したレシーバ（インスタンス）のこと
  }

  public function getProduct(){
    echo $this->product;
  }

  public function addProduct($item){
    // .=文字結合
    $this->product .= $item;
  }

  // public static functionはクラスメソッド見たいなものクラスから直接呼び出せる。静的にクラスから関数を呼び出せる。
  public static function getStaticProduct($str){
    echo $str;
  }

}

$instance = new Product('テスト'); //　＿＿のコンストラクター関数が実行される
$instance->getProduct();
echo '<br>';
$instance->addProduct('追加分');
$instance->getProduct();
echo '<br>';
Product::getStaticProduct('静的');
echo '<br>';
?>