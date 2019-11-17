<?php
// https://atcoder.jp/contests/abc044/tasks/abc044_a
// 日数に酔って異なる料金形態に合わせて、合計金額を出力する

// fgets(STDIN)で標準入力,trimで改行を削除
$N = trim(fgets(STDIN));
$K = trim(fgets(STDIN));
$X = trim(fgets(STDIN));
$Y = trim(fgets(STDIN));

//出力する合計金額を定義
$count = 0;

//もし$Nが$Kより大きければ,割引と割引以外の日数に合わせて計算する
//それ以外の場合は宿泊日数と割引価格で計算する
if($N - $K >= 0){
  $count = $K * $X + ($N-$K) * $Y;
}else{
  $count = $N *$X;
}

//計算結果を出力する
echo $count."\n";