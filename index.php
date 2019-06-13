<?php 

var_dump(time());
var_dump(mktime(10,55,00,6,13,2019));
var_dump(strtotime("last sunday"));
var_dump(strtotime("+ 1hour"));

echo date("Y-m-d H:i:s", strtotime("last sunday"));
echo date("z", strtotime("last sunday"));
