<?php 
$news = fuel_model('news');

?>

<div class="row padded">
  <article class="panel panel-default col-xs-12 rounded-bottom-footer shadow-both">
   <?php foreach($news as $item) : ?>
    <section class="panel-body row static-listing">
      <div class="col-xs-12 col-sm-11 col-md-10 col-lg-9">
        <h2><?=$item->title?></h2>
        <h4><strong>Subtitle</strong><?=date('l, F d, Y, g a T',strtotime($item->date_added))?></h4>
        <p><?=$item->content?></p>
        <div class="btn-cage"> <a href="<?=$item->link?>" class="btn btn-lg btn-community" data-not-on-prod-class-change="">Learn More</a><a href="#" class="btn btn-lg btn-primary">Get Tickets</a> </div>
      </div>
    </section>
    <?php endforeach;  ?>
    <hr class="row">
  </article>
</div>
