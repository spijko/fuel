<?php

$partners = fuel_model('partners');
   ?>

 
<div class="row padded">
			<article class="panel panel-default shadow-both">
	<header class="panel-header centered-padded row">
		<div class="col-xs-12">
						<div class="ico-heart ico-header community" data-not-on-prod-class-change=""></div>
			<h1>Our Partners</h1>
			<h4>Community</h4>
		</div>
	</header>
	<section class="panel-body row">
		<div class="col-xs-12 col-lg-10 col-lg-offset-1 columned-img-list-container">
			<ul class="columned-img-list">
            <?php foreach($partners as $item) : ?> 
            
			 <li><img alt="" src="<?=img_path($item->partner_image)?>"></li>
  
 			<?php endforeach;  ?>
									 
									
	</ul>
		</div>
	</section>
</article>
		</div>