<?php/* Template Name: CustomPageAbout */?>
<?php
get_header(); 

$current_page_id = get_the_ID();
$imgUrl = wp_get_attachment_url( get_post_thumbnail_id($current_page_id), 'thumbnail' ); 
$pageTitle=get_the_title( $current_page_id );
$page_data = get_page( $current_page_id ); 
$output =  apply_filters( 'the_content', $page_data->post_content );
?>


<div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/style/images/art/parallax1.jpg);">
    <div class="container inner text-center">
      <!--<div class="headline text-center">
        <h2>about us</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>-->
    </div>
  </div>
  
  
  
  <div class="light-wrapper">
    <div class="container inner">
	<div class="breadcrumb"><a href="<?php echo home_url()?>">Home</a> > <?php echo $pageTitle ?></div>
      <div class="row">
	  <?php if($imgUrl) {?>
        <div class="col-sm-5">
          <figure><img src="<?php echo $imgUrl; ?>" title="<?php echo $pageTitle ?>" /></figure>
        </div>
	  <?php } ?>
        <!--/column -->
        <div class="col-sm-7">
          <h3 class="section-title"><?php echo $pageTitle ?> in bronx</h3>
          <?php echo $output ?>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="divide60"></div>
      
      <!--/.row -->
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
   <?php get_footer();
