<?php 

$members = ["ishida", "imamura", "isogai", "iwata", "okada"];

//echo count($members);

sort($members);
//var_dump($members);

if (in_array("sugahara", $members)) echo "minami!!";

//echo implode("@", $members);

$atstr = implode("@", $members);
//var_dump($atstr);
var_dump(explode("@", $atstr));
