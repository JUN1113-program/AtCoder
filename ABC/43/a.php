<?php
// https://atcoder.jp/contests/abc144/tasks/abc043_a
// 一人目には1個、二人目には2個、3人目には3個のアメをプレゼントする。
// 必要なアメの数はいくつ？


// fgets(STDIN)で標準入力,trimで改行を削除
$N = trim(fgets(STDIN));

//解答用のcountを定義
$count = 0;

//定数Nまでcountに足し合わせる
for($i = 0; $i <= $N; $i++){
  $count += $i;
}

//答えを出力
echo $count."\n";