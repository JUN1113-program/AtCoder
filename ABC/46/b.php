<?php
// https://atcoder.jp/contests/abc046/tasks/abc046_b
// N個のボールをK色で塗る、ただし隣り合う色は同一ではない

// 変数を$N,$Kとして入力する
list($N, $K) = explode(" ", trim(fgets(STDIN)));

echo ($K-1)**($N-1)*$K."\n";