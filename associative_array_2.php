<?php

// 連想配列応用
$array_member = [
  '本田' => [
    'height' => 170,
    'hobby'  => 'サッカー'
  ],
  '香川' => [
    'height' => 165,
    'hobby'  => 'サッカー'
  ]
];

echo $array_member['香川']['height'];

?>