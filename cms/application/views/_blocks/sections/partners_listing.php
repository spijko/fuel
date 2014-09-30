<?php

$partners = fuel_model('partners');
   ?>
<?php foreach($partners as $item) : ?>
 
 
<div class="partners_item">
    
 <?php
 

// $var ="$".$item->name;
 $var = "partner_".$item->id;
 //echo $$var;
  // DIsplays the selected partners on the page
 if(!empty($$var) )
 {
	 echo $item->partner_title;
 }
 ?>
 <?php endforeach; ?>
 
 