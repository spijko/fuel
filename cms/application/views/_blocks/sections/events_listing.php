<?php

$promotions = fuel_model('events');
   ?>
<?php foreach($promotions as $item) : ?>
 
 
<div class="promotions_item">
    
 <?php
 

// $var ="$".$item->name;
 $var = str_replace(" ","_",$item->name);
  // DIsplays the selected promotions on the page
 if(!empty($$var) )
 {
	 echo $item->name;
 }
 ?>
 <?php endforeach; ?>
 
 