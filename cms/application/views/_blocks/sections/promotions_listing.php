<?php

$promotions = fuel_model('promotions');
   ?>
<?php foreach($promotions as $item) : ?>
 
 
<div class="promotions_item">
    
 <?php
 

// $var ="$".$item->name;
 $var = "promo_".$item->id;
 
  // DIsplays the selected promotions on the page
 if(!empty($$var) )
 {
	 echo $item->name;
 }
 ?>
 <?php endforeach; ?>
 
 