<?php
// https://atcoder.jp/contests/abc045/tasks/abc045_b
// 三人がカードゲームを行う際の勝者を導く

// fgets(STDIN)で標準入力,trimで改行を削除,str_splitで配列化する
$A = str_split(trim(fgets(STDIN)));
$B = str_split(trim(fgets(STDIN)));
$C = str_split(trim(fgets(STDIN)));

// Aスタートと定義されているため変数nextをaと定義
$next = "a";

// 答えを定義
$ans = "A";

// $nextの値に合わせて、array_shiftで配列の先頭を取り出す
// A，B，Cいずれかの配列がからになるまで続ける
while ($next){
  switch($next){
    case "a":
      $next = array_shift($A);
      $ans = "A";
      break;
    case "b":
      $next = array_shift($B);
      $ans = "B";
      break;
    case "c":
      $next = array_shift($C);
      $ans = "C";
      break;
  }
}

// 結果を出力
echo $ans."\n";