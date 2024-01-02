<?php

$members = [
  'name' => '本田',
  'height' => '170',
  'hobby' => 'サッカー',
];

foreach ($members as $member){
  echo $member;
  echo '<br>';
}

echo '<br>';

// キーとバリューをそれぞれ表示
foreach ($members as $key => $value){
  echo $key . 'は' . $value . 'です';
  echo '<br>';
}


echo '<br>';
// ネストがある連想配列
$members_2 = [
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー',
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー',
  ]
];

// さらにforeachする必要がある。手間がかかるので、他の方法もないか調べておくと良い。
foreach ($members_2 as $member){
  foreach ($member as $key => $value){
    echo $key . 'は' . $value . 'です';
    echo '<br>';
  }
}
?>