<?php
// https://atcoder.jp/contests/abc046/tasks/abc046_a
// 入力された文字列が何種類の文字で構成されているかを求めよ

// count_string($array, $string)で$arrayに含まれる$stringの数をカウントする
function count_string($array, $string)
{
  return count(array_keys($array, $string));
}
// "a b c d e f"といった形で入力を受ける
$array = explode(" ", trim(fgets(STDIN)));

// 出力する文字数を定義する
$ans = count($array);

foreach ($array as $key => $value) {
  // 同じ文字が出現したらtrue
  if(count_string($array, $value) != 1){
    $ans--;
    // これ以後にカウントされないように、自身を0に置き換える
    $array[$key] = 0;
  }
}

echo $ans."\n";