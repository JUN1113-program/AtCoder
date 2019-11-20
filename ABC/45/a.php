<?php
// https://atcoder.jp/contests/abc045/tasks/abc045_a
// 台形の面積を求める

// fgets(STDIN)で標準入力,trimで改行を削除
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$h = trim(fgets(STDIN));

echo ($a + $b)/2 * $h."\n";