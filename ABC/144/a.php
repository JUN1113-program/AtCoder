<?php
// https://atcoder.jp/contests/abc144/tasks/abc144_a

// fgets(STDIN)で標準入力,explode("",値)で入力を" "で配列化, list($変数1, $変数2)で配列をそれぞれの変数に代入
list($A, $B) = explode(" ", fgets(STDIN));
if($A <= 9 && $B <= 9){
  // intval($変数)で変数を整数化する(こうしなければ掛け算でエラーが出る)
  echo intval($A)*intval($B);
}else{
  echo "-1";
}
echo "\n";