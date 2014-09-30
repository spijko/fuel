<div class="row padded">
			<article class="panel panel-default col-xs-12 static-listing-feature shadow-both">
	<section class="panel-body row">
		<figure class="col-xs-12 col-sm-5 col-md-6">
			<img alt="" src="<?=img_path($header_img)?>">
		</figure>
		<div class="col-xs-12 col-sm-7 col-md-6">
			<h1><?=$title?></h1>
			<h4><?=date('l, F d, Y, g a T',strtotime($dt))?></h4>
			<p><?=$desc?></p>
			<div class="btn-cage">
								<a href="<?=$link?>" class="btn btn-lg btn-community" data-not-on-prod-class-change="">Learn More</a><button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#reserve-tickets-modal">Reserve Tickets</button>
			</div>
		</div>
	</section>
</article>
		</div>