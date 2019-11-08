<?php
// https://atcoder.jp/contests/abc144/tasks/abc144_b
// 入力された値が9*9の範囲で表現できるかどうかを判定する

//整数Nの入力を受け付ける
$N = intval(fgets(STDIN));

//99の範囲を指定
$Numset = array(1,2,3,4,5,6,7,8,9);

//答えを準備
$ans = "No";

//変数Numsetをforeachで分解
foreach ($Numset as $num) {
  //変数Nに対して1~9の割り算を行う
  $data = $N / $num;

  //変数Nの割り算した結果が整数かつ、1以上、9以下である時、変数ansにYesを代入する
  if(is_int($data) && $data >= 1 && $data <= 9){
    $ans = "Yes";
  }
}

// 答えを出力する
echo $ans."\n";