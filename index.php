<?php 

//setcookie("username", "foo", time()+60*60);
setcookie("username", "foo", time()-60*60);

echo $_COOKIE['username'];
