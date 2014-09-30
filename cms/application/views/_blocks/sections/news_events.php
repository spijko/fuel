<?php 

/*$events = fuel_model('events');
$news = fuel_model('news');*/

?>
<div class="row padded">
			<div class="row">
	<div class="col-xs-12 col-sm-6">
		<article class="panel panel-default static-callout shadow-both">
			<header class="panel-header alpha-img-header">
				<figure class="alpha-img">
					<div class="cover-container">
						<img alt="community" src="<?=img_path($events_img)?>" srcset="//placehold.it/1340x260 2x">
					</div>
				</figure>
			</header>
			<section class="panel-body">
				<h3>Events</h3>
				<p><?=$events_desc?></p>
								<a href="'<?=$events_link ?>'" class="btn btn-lg btn-community" data-not-on-prod-class-change="">View Events</a>
			</section>
		</article>
	</div>
	<div class="col-xs-12 col-sm-6">
		<article class="panel panel-default static-callout shadow-both">
			<header class="panel-header alpha-img-header">
				<figure class="alpha-img">
					<div class="cover-container">
						<img alt="community" src="<?=img_path($news_img)?>" srcset="//placehold.it/1370x260 2x">
					</div>
				</figure>
			</header>
			<section class="panel-body">
				<h3>News</h3>
				<p><?=$news_desc?></p>
								<a href="<?=$news_link?>" class="btn btn-lg btn-community" data-not-on-prod-class-change="">Read News</a>
			</section>
		</article>
	</div>
</div>
		</div>