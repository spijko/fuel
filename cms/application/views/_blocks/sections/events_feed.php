<?php 
$events = fuel_model('events');
 
?>

<div class="row padded">
  <article class="panel panel-default col-xs-12 rounded-bottom-footer shadow-both">
    <?php foreach($events as $item) : ?>
    <section class="panel-body row static-listing">
      <div class="col-xs-12 col-sm-4">
        <figure class="bordered-img-container shadow-left"> <img alt="" src="<?= img_path($item->image)?>" srcset="http://placehold.it/640x480 2x"> </figure>
      </div>
      <div class="col-xs-12 col-sm-8">
        <h2>
          <?=$item->name?>
        </h2>
        <h4><strong>Subtitle</strong>
          <?=date('l, F d, Y, g a T',strtotime($item->start_date))?>
        </h4>
        <p>
          <?=$item->description?>
        </p>
        <div class="btn-cage"> <a href="<?=$item->link?>" class="btn btn-lg btn-community" data-not-on-prod-class-change="">Learn More</a><a href="#" class="btn btn-lg btn-primary">Get Tickets</a> </div>
      </div>
    </section>
    <hr class="row">
    <?php endforeach;  ?>
    <footer class="panel-footer row">
      <nav class="col-xs-12"> <a href="#" class="prev pull-left">Older Events</a> <a href="#" class="next pull-right disabled">Newer Events</a> </nav>
    </footer>
  </article>
</div>
