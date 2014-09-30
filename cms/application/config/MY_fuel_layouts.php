<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Layouts
|--------------------------------------------------------------------------
|
| specify the name of the layouts and their fields associated with them
*/

$config['default_layout'] = 'main';

$config['layouts_folder'] = '_layouts';

$config['hidden'] = array();

$config['layouts']['main'] = array(
	//'file' 		=> $config['layouts_path'].'main',
	// 'class'		=> 'Main_layout',
	// 'filepath' => 'libraries',
	// 'filename' => 'Main_layout.php',
	
	
	'fields'	=> array(
		'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
		'page_title' => array('label' => lang('layout_field_page_title')),
		'meta_description' => array('label' => lang('layout_field_meta_description')),
		'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
		'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
		'heading' => array('label' => lang('layout_field_heading')),
		'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
		'body_class' => array('label' => lang('layout_field_body_class')),
	)
);

/* End of file MY_fuel_layouts.php */
/* Location: ./application/config/MY_fuel_layouts.php */

$test_layout = new Fuel_layout('test');
$test_layout->set_description('This is the test layout field.');
$test_layout->set_label('Test');
 
$test_fields = array(
    'Title/Intro'   => array('type' => 'fieldset', 'label' => 'Title/Intro', 'class' => 'tab'),
    'h1' => array('label' => 'Heading'),
    'Sections'  => array('type' => 'fieldset', 'label' => 'Sections', 'class' => 'tab'),
    'sections' => array(
                    'type'          => 'template',
                    'display_label' => FALSE,
                    'label'         => 'Sections',
                    'add_extra'     => FALSE,
                    'repeatable'    => TRUE,
                    'max'           => 20,
                    'min'           => 0,
                    'title_field'   => 'block',
                    'fields'        => array(
                                            'section'   => array('type' => 'section', 'value' => 'Section <span class="num">{num}</span>'),
                                            'block'     => array('type' => 'block', 'folder' => 'sections'),
                                        ),
 
                    ),
 
);
$test_layout->add_fields($test_fields);
 
// Added to the 'layouts' key
$config['layouts']['test'] = $test_layout;
 
 
// Fuel layout block
$image_right = new Fuel_block_layout('image_right');
$image_right->set_label('Image Right');
$image_right->add_field('title', array());
$image_right->add_field('content', array('type' =>'text'));
$image_right->add_field('image', array('type' =>'asset'));
 
// NOTE THIS IS ADDED TO THE 'blocks' key and not the 'layouts' key !!!!
$config['blocks']['image_right'] = $image_right;


// image left
$image_left = new Fuel_block_layout('image_left');
$image_left->set_label('Image Left');
$image_left->add_field('title', array());
$image_left->add_field('content', array('type' =>'text'));
$image_left->add_field('image1', array('type' =>'asset'));
$image_left->add_field('image2', array('type' =>'asset'));
$image_left->add_field('image3', array('type' =>'asset'));

// NOTE THIS IS ADDED TO THE 'blocks' key and not the 'layouts' key !!!!
$config['blocks']['image_left'] = $image_left;

// Simple paragraph
$paragraph = new Fuel_block_layout('para');
$paragraph-> set_label('Simple Paragraph');
$paragraph -> add_field('content',array('type'=>'text'));
$config['blocks']['para']=$paragraph;


// Promotions Listing
$promotions = new Fuel_block_layout('promotions_listing');
$promotions -> set_label('Promotions Listing');
$promo_opt = fuel_model('promotions');
$selectedPromotions = array();
foreach($promo_opt as $item) :
	$options[] = $item->name;
	//$promotions -> add_field(str_replace(" ","_",$item->name), array('type'=>'checkbox','value'=>$item->id)); 
	$promotions -> add_field("promo_".$item->id, array('label'=>$item->name,'type'=>'checkbox','value'=>$item->id)); 
endforeach;

//$paragraph -> add_field('content',array('type'=>'text'));
$config['blocks']['promotions_listing']=$promotions ;

// Partners listing
$partners = new Fuel_block_layout('partners_listing');
$partners -> set_label('Partners Listing');
$part_opt = fuel_model('partners');
$selectedPartners = array();
foreach($part_opt as $item) :
	$options[] = $item->name;
	$var ="promo"+ $item->id;
	 //$partners -> add_field(str_replace(" ","_",$item->partner_title), array('type'=>'checkbox','value'=>$item->id)); 
	//$partners -> add_field( array('name'=>$item->name,'type'=>'checkbox','value'=>$item->id)); 
	$partners -> add_field("partner_".$item->id, array('label'=>$item->partner_title,'type'=>'checkbox','value'=>$item->id)); 
endforeach; 
 
$config['blocks']['partners_listing']=$partners ;

// Events Listing
$events = new Fuel_block_layout('events_listing');
$events -> set_label('Events Listing');
$events_opt = fuel_model('events');
$selectedEvents = array();
foreach($events_opt as $item) :
	$options[] = $item->name;
	$events -> add_field(str_replace(" ","_",$item->name), array('type'=>'checkbox','value'=>$item->id)); 
endforeach;

//$paragraph -> add_field('content',array('type'=>'text'));
$config['blocks']['events_listing']=$events ;


// Fuel layout block
$category_header = new Fuel_block_layout('category_header');
$category_header->set_label('Category Header');
$category_header->add_field('title', array());
$category_header->add_field('image', array('type' =>'asset'));
 
// NOTE THIS IS ADDED TO THE 'blocks' key and not the 'layouts' key !!!!
$config['blocks']['category_header'] = $category_header;

// mission section
$mission_statement = new Fuel_block_layout('mission_statement');
$mission_statement->set_label('Our Mission');
$mission_statement->add_field('desc', array('type'=>'text'));
 
 $config['blocks']['mission_statement'] = $mission_statement;
 
 // news and events section
 
$news_events = new Fuel_block_layout('news_events');
$news_events->set_label('Events and News Section');
$news_events->add_field('events_img', array('type' =>'asset'));
$news_events->add_field('events_desc', array('type'=>'textarea'));
$news_events->add_field('events_link', array('type' =>'text','ignore_representative' => TRUE));

$news_events->add_field('news_img', array('type' =>'asset'));
$news_events->add_field('news_desc', array('type'=>'textarea'));
$news_events->add_field('news_link', array('type' =>'text','ignore_representative' => TRUE));
 
 $config['blocks']['news_events'] = $news_events;
 
 // mission able section
 $mission_able = new Fuel_block_layout('mission_able');
 $mission_able->add_field('img_header', array('type' =>'asset'));
$mission_able->add_field('desc', array('type'=>'textarea'));
$mission_able->add_field('link', array('type' =>'text','ignore_representative' => TRUE));
 
 $config['blocks']['mission_able'] = $mission_able;
 
 // partners listing
 
  $partner_list = new Fuel_block_layout('partner_list');
   $config['blocks']['partner_list'] = $partner_list;
   
  // single section
  
$dynamic_link_section = new Fuel_block_layout('dynamic_link_section');
$dynamic_link_section->add_field('header_img', array('type' =>'asset'));

$dynamic_link_section->add_field('title', array('type' =>'text','ignore_representative' => TRUE));
$dynamic_link_section->add_field('dt',array('type'=>'datetime|timestamp'));
$dynamic_link_section->add_field('desc', array('type'=>'textarea'));
$dynamic_link_section->add_field('link', array('type' =>'text','ignore_representative' => TRUE));
$config['blocks']['dynamic_link_section'] = $dynamic_link_section;

// events list

$events_feed = new Fuel_block_layout('events_feed'); 
$config['blocks']['events_feed'] = $events_feed;

// news feed
$news_feed = new Fuel_block_layout('news_feed'); 
$config['blocks']['news_feed'] = $news_feed;