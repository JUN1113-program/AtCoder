<?php
// https://atcoder.jp/contests/abc044/tasks/abc044_b
// どの英小文字も、w中に偶数回出現すればYesを出力する

// AtCoderではmb_substr_countは使えない
// count_string($array, $string)で$arrayに含まれる$stringの数をカウントする
function count_string($array, $string)
{
  return count(array_keys($array, $string));
}

// fgets(STDIN)で標準入力
// trimで改行を削除
// str_splitで配列化(array_keysは文字列には使えないため)
$w = str_split(trim(fgets(STDIN)));

// 予めアルファベットを定義しておく,str_splitで配列化
$ALPHABETS = str_split("abcdefghijknmlopqrstuvwxyz");

// 出力を定義
$ans = "Yes";

// 入力された文字列に登場したアルファベットの数が奇数であれば,$ansに"No"を代入する
foreach($ALPHABETS as $alphabet){
  if (count_string($w, $alphabet)%2 == 1){
    $ans = "No";
  }
}

// 答えを出力する
echo $ans."\n";