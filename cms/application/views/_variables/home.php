<?php /*?><?php
$vars['layout'] = 'home';
$news = fuel_model('news');


?>

<?php foreach($news as $item) : ?>
 
<div class="news_item">
    <h2><a href="<?=$item->url?>"><?=$item->title?></a></h2><br />
 <?=$item->type?>
    <div class="date"><?=$item->release_date_formatted?></div><br />

    <?=$item->get_excerpt_formatted(300, 'Read Full Story »')?>
 
    <hr />
</div>
 
<?php endforeach; ?>

<h1>This is a test</h1>	<?php */?>