<?php
// https://atcoder.jp/contests/abc047/tasks/abc047_a

list($a, $b, $c) = explode(" ", trim(fgets(STDIN)));
$ans = "No";

if($a + $b == $c || $a + $c == $b || $b + $c == $a){
  $ans = "Yes";
}
echo $ans."\n";