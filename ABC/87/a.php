<?php
$x = fgets(STDIN) - fgets(STDIN);
$b = fgets(STDIN);
echo $x -= floor($x / $b) * $b;