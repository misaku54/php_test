<?php

class BaseProduct{
  public function echoProduct(){
    echo '親クラスです。';
  }

  // オーバーライド（上書き）
  public function getProduct(){
    echo '親の関数です。';
  }

  protected function echoB(){
    echo '自分のクラスか継承した子クラスの中でのみ使える';
  }

}

// finalを頭につけるとこのクラスからの継承が不可になる。
final class Bag{

}

class Product extends BaseProduct{
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

  

  public function echoProtected(){
    $this->echoB();
  }
}

$instance = new Product('テスト'); //　＿＿のコンストラクター関数が実行される
$instance->echoProduct();
echo '<br>';
$instance->getProduct(); // 子クラスの関数が上書きされ「テスト」が表示される。
echo '<br>';
$instance->echoProtected();
// $instance->echoB();
// echo 'aa';
?>