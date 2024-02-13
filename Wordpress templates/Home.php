<?php
/*
Template Name: Home
*/
?>

<? get_header();?>

	<section id="Kontent">
	  <div class="container-fluid pt-5 pb-5">
		<div class="KontentBlock row justify-content-center pt-5 pb-5 text-center flex-column">
		  <div class="Kontnt-blocks col">
		    <div class="KontentLogo"><img class="Kontent-Logo-img" src="<? the_field('logoblock1'); ?>" alt=""></div>
		  </div>	
          
          <div class="Kontnt-blocks col mt-3 text-uppercase">
		    <h6 class="Kontenttext"><? the_field('titleblock1');?></h6>
		    <p class="Kontentstroka"><? the_field('Subtitleblok1');?></p>
		    <input class="KontentKnopka btn" type="button" name="knopka" value="<? the_field('textbuttonblok1');?>">
		  </div>
		</div>
	  </div>		
	</section>

	<section id="Kontent2">
		<div class="container pt-5 pb-5">
		<div class="Kontent2-Block row justify-content-center pt-4 pb-4 flex-column">
			
	<?php
      global $post;

   $news = get_posts([ 
	   'numberposts' => -1,
	   'category'    => 5,
   ]);

   if( $news ){
	 foreach( $news as $post ){
		setup_postdata( $post );
		?>
		<div class="Kontent2Blocks col">
        <div class="Kontent2-blocks-img float-start me-3">
			  <?php the_post_thumbnail( array(500,500), array('class','Kontent2-Img'));?>
			  </div>
				<div class="Kontent2-blocks-texts text-start ">
				<h6 class="Kontent2BlocksText"><? the_title(); ?></h6>
				<p class="Kontent2BlocksStroka"><? the_content(); ?></p>
				<input class="Kontent2BlocksKnopka btn " class="Kontent2BlocksModalKnopka" type="button" name="knopka" value="Подробнее">
				</div>
			</div>
		<?php } } wp_reset_postdata();?>
	   
	 </div>

<?php
      global $post;

   $modalokno = get_posts([ 
	   'numberposts' => -1,
	   'category'    => 8,
   ]);

   if( $modalokno ){
	 foreach( $modalokno as $post ){
		setup_postdata( $post );
		?>
		  <div class="Kontent2Modal">
		  <div class="Kontent2ModalBlock">
		  	<span class="Kontent2-Close ">&#x2715;</span>
			<div class="Контент2Okno">
				<div class="ps-2 pe-2">
				<h6 class="Kontent2Logo">RETROSPECT</h6>
				</div>

				<div class="Kontent2-modal-block-img">
				<?php the_post_thumbnail( array(500,300), array('class','Kontent2OknoImg'));?>
			  </div>

				<div class="p-3">
				<h6 class="Kontent2OknoText"><? the_title(); ?></h6>
				<p class="Kontent2OknoStroka"><? the_content(); ?></p>
        </div>
			</div>
		</div>
		</div>
		<?php } } wp_reset_postdata();?>
   
		</div>
	</section>


	<section id="Kontent3">
     <div class="container-fluid pt-5 pb-5 text-center">
     	<h6 class="Kontent3BlockText"><? the_field('Titlegalleryblock');?></h6>
		  <p class="Kontent3BlockStroka"><? the_field('Subtitlegallery');?></p>	
	    <div class="Kontent3-block row justify-content-center pt-4">
		  <div class="Kontent3Blocks col">
			<div class="kontent3-blocks-gallery">
			<img class="Kontent3BlockImgs" src="<? the_field('galleryimg');?>" alt="">
			</div>
			<a class="Kontent3Silka" href="gallery"><input class="Kontent3BlockKnopka btn mt-5" type="button" name="knopka" value="<? the_field('Textbuttongallery');?>"></a>
		  </div>
      </div>
     </div> 		
	</section>
    
    <section id="Kontent4">
      <div class="container pt-5 pb-5">
    	<div class="Kontent4Block row justify-content-center pt-5 pb-5 text-center">
    	<div class="Kontent4-blocks col pt-5 pb-5">	
    		<h6 class="Kontent4BlockText"><? the_field('titlenewsblock');?></h6>
    		<p class="Kontent4BlockStroka"><? the_field('subtitlenewsblock');?></p>
    		<input class="Kontent4BlockKnopka btn" type="button" name="knopka" value="<? the_field('TextButtonnewsblock');?>">
    	</div>	
    	</div>
      </div>		
    </section>

<? get_footer();?>