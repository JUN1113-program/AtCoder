<?php
// https://atcoder.jp/contests/abc042/tasks/abc042_a
//整数A,B,Cが5,7,5の組み合わせであるかどうか判定


// fgets(STDIN)で標準入力,explode("",値)で入力を" "で切り分け配列化
$array = explode(" ", fgets(STDIN));

//5、7用それぞれのカウントを作成
$count5 = 0;
$count7 = 0;

//入力された数字を5か7であればそれぞれのカウントをすすめる
foreach($array as $num){
  switch ($num) {
    case 5:
      $count5++;
      break;
    case 7:
      $count7++;
      break;
  }
}

//5のカウントが2、かつ7のカウントが1であればYES
if($count5 == 2 && $count7 == 1){
  echo("YES\n");
}else{
  echo("NO\n");
}