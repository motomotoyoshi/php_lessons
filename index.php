<?php 

//$sales = [
//  "hoge" => 200,
//  "hage" => 900,
//  "foo" => 3000,
//];
//
//foreach($sales as $key => $value){
//  echo "($key) $value ";
//}

$colors = ["red", "blue", "pink"];
foreach($colors as $value){
  echo "$value ";
}

//foreach($colors as $value):
//  echo "$value ";
//endforeach;

?>

<ul>
  <?php foreach($colors as $value):?>
  <li><?php echo "$value ";?></li>
  <?php endforeach ?>
</ul>
